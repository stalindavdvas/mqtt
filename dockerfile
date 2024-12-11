# Usar la imagen oficial de PHP con Apache
FROM php:8.1-apache

# Mantenedor de la imagen
LABEL maintainer="your_name@example.com"

# Instalar extensiones de PHP necesarias, si las hubiera
RUN apt-get update && apt-get install -y \
    libssl-dev \
    && docker-php-ext-install sockets

# Copiar los archivos de la aplicación PHP al directorio de Apache
COPY . /var/www/html/

# Dar permisos a los archivos
RUN chown -R www-data:www-data /var/www/html/

# Exponer el puerto 80 para acceso HTTP
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
