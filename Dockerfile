FROM php:8.3-apache
COPY . /var/www/html/
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN apt-get update && apt-get upgrade -y && docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo_mysql


#set environment variable for mysql
# ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_HOST=db
ENV MYSQL_USER=admin
ENV MYSQL_PASSWORD=admin123
ENV MYSQL_DATABASE=mysqldb
ENV MYSQL_PORT=3306
EXPOSE 9001