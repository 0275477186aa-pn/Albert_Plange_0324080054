FROM php:8.3-apache

# Copy the application into Apache's web directory
COPY . /var/www/html/

# Enable Apache URL rewriting
RUN a2enmod rewrite

# Set permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]