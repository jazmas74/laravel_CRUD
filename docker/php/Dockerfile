FROM php:7.3.11-fpm

# COPY php.ini
COPY ./php.ini /usr/local/etc/php/php.ini

#RUN apt-get update \
#  && apt-get install -y zlib1g-dev mariadb-client vim libzip-dev \
#  && docker-php-ext-install zip pdo_mysql
RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    zlib1g-dev \
    && docker-php-ext-install \
    zip \
    pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

#Composer install
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - \ 
    && apt-get update \
    && apt-get install -y nodejs

RUN npm install

#RUN npm i --save-dev laravel-mix@latest \
#    && npm i --save-dev sass-loader@latest \
#    && npm i --save-dev postcss@latest \
#    && npm i --save-dev webpack@latest

WORKDIR /var/www/html
