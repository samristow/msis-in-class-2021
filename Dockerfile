FROM php:7.4-apache

LABEL maintainer="Sam Ristow"

RUN docker-php-ext-install pdo_mysql

#Set the working directory in the image
WORKDIR /srv/app

#Copy our public folder to the working directory
COPY app /srv/app

# Apache config
COPY docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

# PHP config 
COPY docker/php/php.ini /usr/local/etc/php/php.ini