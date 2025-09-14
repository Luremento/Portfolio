#!/bin/bash

# Шаг 1: Устанавливаем и собираем фронтенд (Vite/React/Tailwind) — Vercel сам сделает Composer
echo "Building frontend..."
npm ci --prefer-offline
npm run build

# Шаг 2: Laravel-команды для продакшена (используем полный путь к PHP из runtime)
echo "Running Laravel optimizations..."
/vercel/path0/php artisan config:clear
/vercel/path0/php artisan cache:clear
/vercel/path0/php artisan key:generate --force
/vercel/path0/php artisan config:cache
/vercel/path0/php artisan route:cache
/vercel/path0/php artisan view:cache

echo "Build completed!"