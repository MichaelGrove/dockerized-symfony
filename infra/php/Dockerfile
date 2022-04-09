FROM php:8.1-fpm-alpine as symfony_php

RUN apk add --no-cache \
    acl \
    fcgi \
    file \
    gettext \
    git \
    ;

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
ENV COMPOSER_ALLOW_SUPERUSER=1

ENV PATH="${PATH}:/root/.composer/vendor/bin"


