# Use an official PHP-FPM image as a parent image
FROM php:7.4-fpm

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Install necessary extensions and dependencies
RUN apt-get update \
    && apt-get install -y nginx php-fpm \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Copy the Nginx configuration
COPY nginx.conf /etc/nginx/sites-available/default

# Copy the PHP application files to the container
COPY . /var/www/html

# Expose port 80 for Nginx
EXPOSE 80

# Start PHP-FPM and Nginx
CMD service php-fpm start && nginx -g "daemon off;"
