# Use an official PHP image with Apache web server
FROM php:8.2-apache

# Copy your PHP project files into the server's directory
COPY . /var/www/html/

# Expose port 80 to allow web traffic
EXPOSE 80

