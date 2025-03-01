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

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Copia los archivos del proyecto
COPY . .

# Instala dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Crea los directorios si no existen y asigna permisos adecuados
RUN mkdir -p storage bootstrap/cache
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Habilita mod_rewrite para Laravel
RUN a2enmod rewrite

# Asegurar que Apache sirva desde la carpeta public/
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Especificar ServerName para evitar advertencias
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Cambia el puerto de Apache a 10000 (Render espera este puerto)
RUN sed -i 's/80/10000/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Expone el puerto 10000
EXPOSE 10000

# Comando para iniciar Apache
CMD ["apache2-foreground"]
