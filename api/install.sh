#!/bin/bash
# Скачиваем и устанавливаем Composer
curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
php /tmp/composer-setup.php --install-dir=/tmp --filename=composer
mv /tmp/composer /usr/local/bin/composer
# Устанавливаем зависимости
composer install --no-dev --optimize-autoloader