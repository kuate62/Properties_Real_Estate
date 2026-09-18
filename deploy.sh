#!/usr/bin/env bash
set -e

echo "🚀 Starting deployment..."

# 1. Maintenance mode (optional)
# php artisan down || true

# 2. Update dependencies
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# 3. Build frontend assets (if Node is available)
if command -v npm &> /dev/null; then
    echo "📦 Building Vite assets..."
    npm ci || npm install
    npm run build
fi

# 4. Storage symbolic link
php artisan storage:link || true

# 5. Database migrations
php artisan migrate --force

# 6. Optimize cache
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 7. Exit maintenance mode
# php artisan up

echo "✅ Deployment completed successfully!"
