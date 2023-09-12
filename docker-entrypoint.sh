#!/bin/sh

if [ -n "$ENTRYPOINT_COMPOSER" ]; then
    composer install
fi

if [ ! -e ".env" ]; then
    php artisan key:generate
fi

if [ -n "$ENTRYPOINT_CACHE" ]; then
    php artisan route:cache
    php artisan config:cache
fi

if [ -n "$ENTRYPOINT_CONFIG_MIGRATE" ]; then
    php artisan migrate --force
fi

if [ -n "$ENTRYPOINT_CONFIG_SEEDER" ]; then
    php artisan db:seed --force
fi

if [ -n "$ENTRYPOINT_QUEUE_WORK" ]; then
    #php artisan queue:work &
fi

chmod 777 -R storage

/usr/bin/supervisord -n -c /etc/supervisor/conf.d/supervisord.conf
