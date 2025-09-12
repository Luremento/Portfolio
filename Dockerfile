 # Установка зависимостей
 RUN apt-get update && apt-get install -y \
     libpng-dev \
     libonig-dev \
     libxml2-dev \
     zip \
     unzip \
     git \
     curl \
     && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

 # Composer
 COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

 # Apache config
 RUN a2enmod rewrite
 RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

 WORKDIR /var/www
 COPY . .

 RUN composer install --no-dev --optimize-autoloader
 RUN cp .env.example .env
 RUN php artisan key:generate
 RUN php artisan storage:link

 RUN chown -R www-data:www-data /var/www
 RUN chmod -R 755 /var/www/storage

 EXPOSE 9000
 CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=9000"]
