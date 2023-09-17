# Change the base image to an image that includes Apache and PHP
FROM php:7.4-apache

# Copy the Laravel application's source code into the Docker image
COPY . /var/www/html

# Set the working directory to the location of the Laravel application in the Docker image
WORKDIR /var/www/html

# Install the necessary PHP extensions and enable Apache's mod_rewrite module
RUN docker-php-ext-install pdo pdo_mysql \
    && a2enmod rewrite

# Change the Apache configuration to point the document root to the Laravel application's public directory
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Copy the Laravel application's .env.docker file to .env in the Docker image
COPY .env.docker ./.env

# Run composer install to install the Laravel application's dependencies
RUN composer install # --no-interaction --no-dev --prefer-dist

# Expose port 80 for Apache
EXPOSE 80

# Change the CMD instruction to start Apache in the foreground
CMD ["apache2-foreground"]

# Change the base image to an image that includes Apache and PHP
FROM php:7.4-apache

# Copy the Laravel application's source code into the Docker image
COPY . /var/www/html

# Set the working directory to the location of the Laravel application in the Docker image
WORKDIR /var/www/html

# Install the necessary PHP extensions and enable Apache's mod_rewrite module
RUN docker-php-ext-install pdo pdo_mysql \
    && a2enmod rewrite

# Change the Apache configuration to point the document root to the Laravel application's public directory
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Copy the Laravel application's .env.docker file to .env in the Docker image
COPY .env.docker ./.env

# Run composer install to install the Laravel application's dependencies
RUN composer install # --no-interaction --no-dev --prefer-dist

# Expose port 80 for Apache
EXPOSE 80

# Change the CMD instruction to start Apache in the foreground
CMD ["apache2-foreground"]
