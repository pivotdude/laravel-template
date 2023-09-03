# Устанавливаем базовый образ
FROM php:8.1

# Копируем исходный код приложения в контейнер
COPY . /server

# Устанавливаем зависимости приложения

RUN apt-get update && apt-get install -y \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libzip-dev \
        unzip \
    && docker-php-ext-install -j$(nproc) mysqli pdo pdo_mysql

# Устанавливаем Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Установка node.js 
RUN curl -sL https://deb.nodesource.com/setup_20.x -o /tmp/nodesource_setup.sh

# Устанавливаем зависимости приложения с помощью Composer
RUN cd /server && \
    composer install --no-interaction --no-dev --prefer-dist

# Указываем рабочую директорию
WORKDIR /server

# Открываем порт 8000 для доступа к приложению
EXPOSE 8000

