# Описание проекта
В данном проекте реализуется тестовое задание на позицию web-разработчика. Что используется:
- Laravel 10.8
- Vue.js
- Vue-router
- Docker
- MySql
- tailwindCSS

# Инсталляция
Клонируйте проект в нужную директорию:
```sh
git clone https://github.com/melvin-rulit/dZENcode
```
Переименуйте файл ```.env.example``` на ```.env``` и заполните поля для подключения к БД:

`DB_CONNECTION=mysql`
`DB_HOST=db_mysql`
`DB_PORT=3306`
`DB_DATABASE=test`
`DB_USERNAME=root`
`DB_PASSWORD=password`

Затем, открыв из папки проекта терминал нужно собрать проект в Docker:
```sh
docker-compose build
```
```sh
docker-compose up -d
```
После того как проект собран и запущен, нужно войти в контейнер:
```sh
docker-compose exec php bash
```
Теперь когда вы внутри контейнера запустите команды для установки зависимостей:
```sh
composer install
```
```sh
npm install
```
Введите команду для генерации таблиц базы данных, тестовых данных и сборки приложения:

```sh
php artisan migrate --seed
```
```sh
npm run build
```

# Запуск проекта

Теперь приложение будет запущено по адресу:
```sh
http://127.0.0.1:9000
```
