# Use PHP 8.2 FPM
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git zip unzip libpng-dev libonig-dev libxml2-dev curl

# Install PHP extensions needed for Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files to container
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Cache config, routes, views (optional but recommended)
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# Expose port for Render
EXPOSE 8000

# Start Laravel using Render's dynamic port
CMD php artisan serve --host=0.0.0.0 --port=${PORT}