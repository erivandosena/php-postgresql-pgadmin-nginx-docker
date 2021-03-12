############################################################
# Dockerfile para construir imagem do conteiner PHP 
# Baseado no Alpine Linux 
############################################################

FROM php:7.4-fpm-alpine

LABEL maintainer=erivandosena@gmail.com

RUN apk add --no-cache libpq
RUN apk update --no-cache \
&& apk add \
icu-dev \
oniguruma-dev \
tzdata \
mysql-dev \
postgresql-dev

RUN docker-php-ext-install intl
RUN docker-php-ext-install pcntl
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install pgsql
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install pdo_pgsql
 
RUN rm -rf /var/cache/apk/*
 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

CMD ["php-fpm"]