# Sets the base image to use for building the Docker image
FROM php:8.1-fpm

# Installs necessary packages and enables the mcrypt extension
RUN apt-get update && apt-get install -y \
libmcrypt-dev \
git \
zip \
unzip \
&& pecl install mcrypt \
&& docker-php-ext-enable mcrypt

# Installs the necessary PHP extensions for connecting to MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Sets the working directory for the container
WORKDIR /var/www/html