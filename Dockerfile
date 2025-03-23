# Gebruik PHP met FPM (zonder Apache)
FROM php:8.2-fpm

# Installeer OS-pakketten en PHP-extensies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \ 
  && docker-php-ext-install pdo_mysql bcmath zip \
  && rm -rf /var/lib/apt/lists/*


# Installeer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


# Stel het werkdirectory in
WORKDIR /var/www/html

# Kopieer de PHP-code naar de container
COPY ../src/ /var/www/html

# # Zorg voor de juiste rechten op Laravel (optioneel, aanbevolen)
# RUN chown -R www-data:www-data /var/www/html/storage \
#     && chown -R www-data:www-data /var/www/html/bootstrap/cache