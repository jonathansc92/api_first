#!/bin/bash

cd /var/www/html/api-first
composer install
chmod -R 777 storage/

cp /var/www/html/api-first/.env.example /var/www/html/api-first/.env
php artisan key:generate
php artisan migrate
php artisan db:seed

chmod -R 777 /var/www/html/api-first/storage/

apache2-foreground