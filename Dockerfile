# Stage 1: Install PHP dependencies with Composer
FROM composer:2 as builder-vendor
WORKDIR /app
COPY database/ database/
COPY composer.json composer.lock ./
RUN composer install --no-interaction --no-plugins --no-scripts --no-dev --prefer-dist --optimize-autoloader

# Stage 2: Build frontend assets
FROM node:20-alpine as builder-assets
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 3: Final production image
FROM php:8.2-fpm-alpine as production
WORKDIR /var/www/html

# Install system dependencies and PHP extensions required by Laravel
RUN apk add --no-cache \
      libpng-dev \
      libzip-dev \
      jpeg-dev \
      freetype-dev \
      nginx \
      supervisor \
      curl \
      && docker-php-ext-configure gd --with-freetype --with-jpeg \
      && docker-php-ext-install \
      gd \
      zip \
      pdo pdo_mysql \
      exif \
      pcntl \
      bcmath

# Copy supervisor and nginx configs
COPY docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/nginx/default.conf /etc/nginx/http.d/default.conf

# Copy application files from builder stages
COPY --from=builder-vendor /app/vendor /var/www/html/vendor
COPY --from=builder-assets /app/public /var/www/html/public
COPY --from=builder-assets /app/resources/views /var/www/html/resources/views
COPY --from=builder-assets /app/.env.example /var/www/html/.env
COPY . /var/www/html

# Set correct permissions for storage and bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Optimize Laravel
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Expose port 80 for Nginx
EXPOSE 80

# Use a custom entrypoint script
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
