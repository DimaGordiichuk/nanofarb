# Инструкция по развертыванию

## Инсталяция Laravel

```
cp .env.example .env
composet install
```
### Настраиваем .env

Делаем миграции и базовое наполенние
```
php artisan key:generate
php artisan migrate --seed
```

## Возможности админ панели в стиле LTE

- Создание поля иерархии в стиле select2 ```@code```
