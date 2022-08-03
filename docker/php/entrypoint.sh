#!/bin/sh

cd /var/www/html

DIR=$(pwd)'/vendor';

ENV=$(pwd)'/.env';

DIR_STORAGE=$(pwd)'/storage';

DIR_BOOTSTRAP=$(pwd)'/bootstrap/cache/';

if [ ! -d "$DIR" ]; then
    composer install
fi

if [ ! -f "$ENV" ]; then
    cp .env.example .env
fi

RUN chown -R www-data:www-data .

chmod -R 777 $DIR_STORAGE

chown -R www-data:www-data $DIR_STORAGE

chmod -R  www-data:www-data $DIR_STORAGE'/app'

chown -R  www-data:www-data $DIR_STORAGE'/app/public'

chmod -R 777 $DIR_BOOTSTRAP

chmod -R  www-data:www-data $DIR_BOOTSTRAP

php artisan key:generate

php artisan jwt:secret

php artisan config:clear

php artisan route:clear

php artisan optimize:clear

exec "php-fpm"
