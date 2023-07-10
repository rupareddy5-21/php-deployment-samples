FROM composer:2.5.8 as build

COPY . /app/
RUN composer install --prefer-dist --no-dev --optimize-autoloader --no-interaction

FROM php:8.2-apache-bullseye as production

COPY --from=build /app /var/www/html
COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Change ownership to www-data for Apache
RUN chown -R www-data:www-data /var/www/ && \
    a2enmod rewrite && \
    service apache2 restart

EXPOSE 80