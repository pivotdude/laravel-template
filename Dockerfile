# Устанавливаем базовый образ
FROM php:8.1

# Копируем исходный код приложения в контейнер
COPY . /server
# Копируем .env.docker заместо .env
COPY .env.docker /server/.env

# Устанавливаем зависимости приложения

RUN apt-get update && apt-get install -y \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libzip-dev \
        unzip \
    # && docker-php-ext-install -j$(nproc) iconv mcrypt mbstring mysqli pdo_mysql zip mysql bcmath bz2 intl mbstring tokenizer xml json common imagick \
    # && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    # && docker-php-ext-install -j$(nproc) gd
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


# Запуск seeders и factories




# CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
 
