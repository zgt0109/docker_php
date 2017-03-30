FROM php:5


RUN docker-php-ext-install mysql mysqli pdo_mysql

RUN mkdir /usr/src/app
WORKDIR /usr/src/app


COPY . /usr/src/app
