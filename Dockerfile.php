FROM php:8.1-fpm-alpine

# Install necessary PHP extensions
RUN docker-php-ext-install pdo_mysql

# Set working directory to document root
WORKDIR /var/www/html/public

# Copy application files to container
COPY . /var/www/html

# Expose port 9000 for PHP-FPM
EXPOSE 9000
