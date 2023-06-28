FROM php:7.4-apache

RUN apt-get update \
    && apt-get install -y \
    && apt-get autoremove -y \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && apt-get install curl -y \
    && apt-get install git -y\
    && apt-get install zip -y

RUN curl -sS https://getcomposer.org/installer​ | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .
RUN composer install --no-dev
RUN mv .env.example .env \
    && chown -R www-data:www-data *

COPY 000-default.conf /etc/apache2/sites-available/
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf &&\
    a2enmod rewrite &&\
    service apache2 restart

EXPOSE 80