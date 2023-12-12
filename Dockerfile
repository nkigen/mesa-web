FROM php:8.1-fpm

# Install dependencies
RUN apt-get update && apt-get install -y libzip-dev libcurl3-dev libpng-dev libonig-dev libxml2-dev

# Install mysqli extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# Copy application files
COPY . /var/www/html

# Configure Nginx
RUN cp /etc/nginx/conf.d/default.conf /etc/nginx/conf.d/app.conf
RUN sed -i 's/8080/80/g' /etc/nginx/conf.d/app.conf

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
