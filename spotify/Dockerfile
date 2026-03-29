FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy local code into the container's web root
COPY . /var/www/html/

# Ensure proper permissions are assigned for the web server to run and access config files
RUN chown -R www-data:www-data /var/www/html/ && \
    chmod -R 755 /var/www/html/

# Expose standard port 80 for Render HTTP
EXPOSE 80
