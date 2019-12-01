FROM php:7.2-fpm
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev vim \
    && docker-php-ext-install -j$(nproc) iconv sockets bcmath  \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --enable-sockets \
    && docker-php-ext-install -j$(nproc) gd
