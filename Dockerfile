FROM php:8.2-apache

COPY public/ /var/www/html/

# ✅ Da permisos de escritura al archivo data.json
RUN chmod 666 /var/www/html/data.json

EXPOSE 80
