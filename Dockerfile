FROM php:7.4-apache

# Install any necessary dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

# Enable Apache modules
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy the application files
COPY index.php config.php functions.php style.css ./

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
