# Use the official PHP image with the desired PHP version
FROM php:8.0.28-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql zip

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=2.6.5

# Set the working directory in the container to your Laravel project
WORKDIR /var/www/html

# Copy the Laravel project files into the container
COPY . .

# Install Laravel project dependencies using Composer
RUN composer install --no-dev

# Expose port 9000 for PHP-FPM (you can change this if needed)
EXPOSE 8000

# Start PHP-FPM
CMD ["php-fpm"]

# For MySQL, you can create a separate Docker container or link to an existing one
# Here's an example of linking to a MySQL container (replace container_name with your MySQL container's name)
# Replace DB_HOST, DB_DATABASE, DB_USERNAME, and DB_PASSWORD with your MySQL configuration
# ENV DB_HOST=mysql_container_name
# ENV DB_DATABASE=your_database_name
# ENV DB_USERNAME=your_database_username
# ENV DB_PASSWORD=your_database_password
