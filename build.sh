#!/bin/bash

# Шаг 1: Устанавливаем Composer через Vercel PHP runtime
echo "Installing Composer..."
curl -sS https://getcomposer.org/installer -o composer-setup.php
php composer-setup.php --install-dir=/tmp --filename=composer
export PATH="/tmp:$PATH"  # Добавляем Composer в PATH

# Шаг 2: Устанавливаем зависимости Laravel
echo "Running composer install..."
/tmp/composer install --no-dev --optimize-autoloader

# Шаг 3: Устанавливаем и собираем фронтенд (Vite/React/Tailwind)
echo "Building frontend..."
npm ci --prefer-offline
npm run build

# Шаг 4: Laravel-команды для продакшена (используем php из runtime)
echo "Running Laravel optimizations..."
php artisan config:clear
php artisan cache:clear
php artisan key:generate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Build completed!"