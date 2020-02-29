FROM php:7.4-apache

# Install additional extensions.
# Some required extensions from laravel website are already satisfied in 7.4
RUN docker-php-ext-install \
  bcmath \
  pdo \
  pdo_mysql