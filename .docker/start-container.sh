#!/bin/bash
set -e

echo "Reset cache..."
php artisan config:cache

echo "Running migrations..."
php artisan migrate --force

echo "Starting Supervisor..."
/usr/bin/supervisord -n -c /etc/supervisor/conf.d/supervisord.conf
