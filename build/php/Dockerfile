FROM php:8.3.22-fpm

RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    curl \
    libpq-dev \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install pdo

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN composer global require leafs/cli -W

# RUN echo 'export PATH="$PATH:$HOME/.composer/vendor/bin"' >> ~/.bashrc
# RUN source ~/.bashrc

WORKDIR /var/www/html

COPY application .

RUN composer install

EXPOSE 9000

USER www-data

CMD ["php-fpm"]
