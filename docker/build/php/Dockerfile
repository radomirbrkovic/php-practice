FROM php:8.1-fpm

# Install zip extension
RUN apt-get update && apt-get install -y \
        libzip-dev \
        libmagickwand-dev \
        zip \
        git \
        curl \
  && docker-php-source extract \
  && docker-php-ext-install zip pdo_mysql sockets

RUN pecl install imagick  \
    && echo "extension=imagick.so" > /usr/local/etc/php/conf.d/ext-imagick.ini

RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_connect_back=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.idekey=xdebug" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_port=9001" >> /usr/local/etc/php/conf.d/xdebug.ini 
RUN curl -sS https://getcomposer.org/installer \
       | php -- --install-dir=/usr/local/bin --filename=composer 
       


