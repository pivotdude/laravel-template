# Устанавливаем базовый образ с необходимыми для laravel пакетами и composer
FROM pivotdude/laravel-php:latest

# Копируем исходный код приложения в контейнер
COPY . /server

# Указываем рабочую директорию
WORKDIR /server

# Копируем .env.docker заместо .env
COPY .env.docker /.env

# Устанавливаем зависимости приложения с помощью Composer
RUN composer install # --no-interaction --no-dev --prefer-dist

# Открываем порт 8000 для доступа к приложению
EXPOSE 8000

CMD ["php", "artisan", "migrate"]
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
