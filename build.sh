#!/bin/bash

# Шаг 1: Устанавливаем Composer через vercel-php runtime
echo "Installing Composer..."
curl -sS https://getcomposer.org/installer -o composer-setup.php
vercel-php composer-setup.php --install-dir=/tmp --filename=composer
export PATH="/tmp:$PATH"  # Добавляем Composer в PATH

# Шаг 2: Устанавливаем зависимости Laravel
echo "Running composer install..."
/tmp/composer install --no-dev --optimize-autoloader

# Шаг 3: Устанавливаем и собираем фронтенд (Vite/React/Tailwind)
echo "Building frontend..."
npm ci --prefer-offline
npm run build

# Шаг 4: Laravel-команды для продакшена (используем vercel-php)
echo "Running Laravel optimizations..."
vercel-php artisan config:clear
vercel-php artisan cache:clear
vercel-php artisan key:generate --force
vercel-php artisan config:cache
vercel-php artisan route:cache
vercel-php artisan view:cache

echo "Build completed!"