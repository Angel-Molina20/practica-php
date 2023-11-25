FROM php:7.4-apache-alpine

COPY . /var/www/php
WORKDIR /var/www/php

EXPOSE 80

CMD ["httpd", "-D", "FOREGROUND"]