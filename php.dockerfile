FROM php:7.2-apache

RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www/html

RUN php -r "copy('https://getcomposer.org/installer', '/tmp/composer-setup.php');" && \
    php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm /tmp/composer-setup.php