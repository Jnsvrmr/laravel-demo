# Gebruik PHP met FPM (zonder Apache)
FROM php:8.2-fpm

# Installeer benodigde extensies
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Stel het werkdirectory in
WORKDIR /var/www/html

# Kopieer de PHP-code naar de container
COPY ../src/ /var/www/html

