# Base image: PHP 8.1 with Apache для Laravel
FROM php:8.1-apache

# Установка системных зависимостей
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install zip

# Очистка кэша
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Установка PHP-расширений (pdo_mysql для Postgres)
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Получение Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Создание пользователя для Composer и Artisan
RUN useradd -G www-data,root -u 1000 -d /home/app app
RUN mkdir -p /home/app/.composer && chown -R app:app /home/app

# Рабочая директория
WORKDIR /var/www/html

# Копирование приложения
COPY . /var/www/html

# Установка прав
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Переключение на пользователя app
USER app

# Установка зависимостей Composer (для продакшена)
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Генерация ключа (миграции раскомментируем после настройки БД)
RUN php artisan key:generate --no-interaction --force
# RUN php artisan migrate --force  # Раскомментируйте после env vars

# Кэширование для продакшена
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Переключение обратно на www-data для Apache
USER www-data

# Включение mod_rewrite для Laravel routes
RUN a2enmod rewrite

# Экспорт порта и запуск Apache
EXPOSE 80
CMD ["apache2-foreground"]
