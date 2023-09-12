# Устанавливаем базовый образ
FROM node:20.2.0

# Копируем исходный код приложения в контейнер
COPY . /frontend

RUN npm i -g pnpm@latest

# Указываем рабочую директорию
WORKDIR /frontend

# Устанавливаем зависимости приложения
RUN pnpm i --production

# build приложения
RUN pnpm run build

# Открываем порт 5173 для доступа к приложению
EXPOSE 5173

CMD ["pnpm", "run", "preview"]
