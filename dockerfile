FROM php:8.2-apache

# Install MySQL extensions for PHP
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    mysqli \
    zip \
    gd \
    calendar \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Enable mod_rewrite
RUN a2enmod rewrite