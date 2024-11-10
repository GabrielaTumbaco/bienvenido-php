# Usa una imagen base de Apache con PHP
FROM php:8.1-apache

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia el archivo PHP al contenedor
COPY bienvenido.php .

# Da permisos al archivo para que pueda ser leído por el servidor web
RUN chmod 644 bienvenido.php
