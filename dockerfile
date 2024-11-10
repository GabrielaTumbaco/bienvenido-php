# Usa una imagen base de Apache con PHP
FROM php:8.1-apache

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia el archivo PHP al contenedor
COPY bienvenido.php .

# Da permisos al archivo para que pueda ser leído por el servidor web
RUN chmod 644 bienvenido.php

# Instala extensiones de PHP si es necesario (ejemplo con PDO y MySQL)
# RUN docker-php-ext-install pdo pdo_mysql

# Expone el puerto 80 para el servidor Apache
EXPOSE 80
