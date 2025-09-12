Dockerfile for Laravel Portfolio on Render

Base image: PHP 8.1 with Apache

FROM php:8.1-apache

Install system dependencies

RUN apt-get update && apt-get install -y 
libpng-dev 
libonig-dev 
libxml2-dev 
zip 
unzip 
git 
curl 
libzip-dev 
libpq-dev 
&& docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip pdo_pgsql

Install Composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

Enable Apache mod_rewrite

RUN a2enmod rewrite

Copy application files

WORKDIR /var/www/html COPY . .

Install Composer dependencies

RUN composer install --no-dev --optimize-autoloader

Copy .env

COPY .env.example .env

Generate app key and run migrations

RUN php artisan key:generate RUN php artisan migrate --force

Create storage link

RUN php artisan storage:link

Set permissions

RUN chown -R www-data:www-data /var/www/html RUN chmod -R 755 /var/www/html/storage

Expose port 80

EXPOSE 80

Start Apache

CMD ["apache2-foreground"]
