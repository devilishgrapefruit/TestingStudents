FROM php:8.1.0-apache
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip
RUN apt-get update && apt-get install -y libmcrypt-dev openssl\
    && pecl install mcrypt \
    && docker-php-ext-enable mcrypt && docker-php-ext-install zip pdo_mysql

RUN apt-get update && \
    apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev && \
    pecl install redis && \
    docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ && \
    docker-php-ext-install gd
WORKDIR /app
COPY .. /app
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000
