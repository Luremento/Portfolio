#!/bin/bash

# Шаг 1: Устанавливаем и собираем фронтенд (Vite/React/Tailwind)
echo "Building frontend..."
npm ci --prefer-offline
npm run build

echo "Build completed!"