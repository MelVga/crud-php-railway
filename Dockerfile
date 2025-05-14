FROM php:8.2-apache
COPY ./public/ /var/www/html/
COPY ./data/data.json /tmp/data.json
RUN chmod 777 /tmp/data.json
EXPOSE 80