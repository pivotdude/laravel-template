# Устанавливаем базовый образ
FROM node:20.2.0

# Копируем исходный код приложения в контейнер
COPY . /frontend

# Устанавливаем зависимости приложения
RUN cd /frontend && npm i

# Указываем рабочую директорию
WORKDIR /frontend

# Открываем порт 5173 для доступа к приложению
EXPOSE 5173