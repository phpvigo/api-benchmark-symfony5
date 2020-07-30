FROM rolandocaldas/php:7.4

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

COPY ./ /application

RUN composer install