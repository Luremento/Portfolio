#!/bin/bash

# Шаг 1: Скачиваем и устанавливаем Composer
echo "Installing Composer..."
curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
php /tmp/composer-setup.php --install-dir=/tmp --filename=composer
export PATH="/tmp:$PATH"  # Добавляем Composer в PATH

# Шаг 2: Устанавливаем зависимости Laravel
echo "Running composer install..."
/tmp/composer install --no-dev --optimize-autoloader

# Шаг 3: Laravel-команды для продакшена
echo "Running Laravel optimizations..."
php artisan key:generate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Build completed!"