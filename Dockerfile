# Usa una imagen oficial de PHP con Apache
FROM php:8.1-apache

# Instala dependencias necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd \
    && docker-php-ext-install gd pdo pdo_mysql

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia los archivos del proyecto
WORKDIR /var/www/html
COPY . .

# Instala dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Permisos para storage y bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expone el puerto 80
EXPOSE 80

# Comando para iniciar Apache
CMD ["apache2-foreground"]
