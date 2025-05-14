FROM php:8.2-apache

# Copia los archivos de tu CRUD
COPY public/ /var/www/html/

# Crea el archivo data.json con permisos de escritura
RUN touch /var/www/html/data.json && chmod 666 /var/www/html/data.json

EXPOSE 80
