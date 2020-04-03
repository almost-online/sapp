FROM php:7.3-cli

RUN apt-get update && apt-get install -y libzip-dev && docker-php-ext-install pdo zip pdo_mysql

RUN apt-get update && apt-get install -y wget \
  && wget https://get.symfony.com/cli/installer -O - | bash \
  && mv /root/.symfony/bin/symfony /usr/local/bin/symfony

WORKDIR /var/www/html

EXPOSE 80

CMD ["symfony", "serve", "--allow-http", "--no-tls", "--port=80", "--dir=/var/www/html"]
