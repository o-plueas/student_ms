# Use official PHP image with Apache
FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite (for Laravel routing)
RUN a2enmod rewrite

# Copy app files
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Give permission to storage and bootstrap/cache
RUN chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
