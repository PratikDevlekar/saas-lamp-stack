FROM php:7.4.29-apache-buster
# Update system core
RUN apt update -y && apt upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# start
CMD ["apache2-foreground"]