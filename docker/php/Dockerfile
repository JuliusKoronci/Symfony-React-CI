FROM php:7.1-fpm

# Install recommended extensions for Symfony
RUN apt-get update && apt-get install -y \
        libicu-dev \
    && pecl install apcu \
    && pecl install apcu_bc-1.0.3 \
    && docker-php-ext-install \
        intl \
        opcache \
    && docker-php-ext-enable \
        intl \
        opcache \
        apcu \
        apc

# Permission fix
RUN usermod -u 1000 www-data