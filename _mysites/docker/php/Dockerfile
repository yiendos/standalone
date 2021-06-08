FROM php:7.3-fpm

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libldap2-dev \
        libsodium-dev \
        libzip-dev \
        libyaml-dev \
        libmagickwand-dev \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install mysqli ldap sodium zip \
    && pecl install xdebug \
    && pecl install yaml \
    && pecl install apcu \
    && pecl install imagick \
    && pecl install apcu_bc-1.0.5 \
    && docker-php-ext-enable apcu --ini-name 10-docker-php-ext-apcu.ini \
    && docker-php-ext-enable apc --ini-name 20-docker-php-ext-apc.ini  \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-enable yaml \
    && docker-php-ext-enable imagick