#!/bin/sh

cd /var/www/html

DIR=$(pwd)'/vendor';

ENV=$(pwd)'/.env';

DIR_STORAGE=$(pwd)'/storage';

if [ ! -d "$DIR" ]; then
    composer install
fi

if [ ! -f "$ENV" ]; then
    cp .env.example .env
fi

php artisan key:generate

php artisan config:clear

php artisan route:clear

php artisan optimize:clear

exec "php-fpm"
