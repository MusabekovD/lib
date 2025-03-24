FROM php:7.4-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    curl \
    zip \
    unzip \
    git \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    && docker-php-ext-configure gd \
    && docker-php-ext-install gd pdo pdo_mysql zip \
    && apt-get install -y default-mysql-client \
    && docker-php-ext-install fileinfo \
    && apt-get install -y libmagic-dev

# Copy Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application code
COPY . /var/www

# Create required directories if they don't exist
RUN mkdir -p /var/www/storage /var/www/bootstrap/cache

# Set permissions
RUN chmod -R 777 /var/www/storage /var/www/bootstrap/cache

# Expose the container's port
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
