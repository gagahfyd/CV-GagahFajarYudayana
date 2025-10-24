# Gunakan image PHP dengan Apache
FROM php:8.2-apache

# Salin semua file ke direktori web server
COPY . /var/www/html/

# Atur permission
RUN chown -R www-data:www-data /var/www/html

# Aktifkan ekstensi PHP yang umum digunakan
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Buka port web (default Apache)
EXPOSE 80
