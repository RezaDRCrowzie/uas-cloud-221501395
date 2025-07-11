FROM php:8.2-apache

RUN docker-php-ext-install mysqli

COPY ./app/ /var/www/html/
COPY ./db /var/www/html/db

WORKDIR /var/www/html

EXPOSE 80