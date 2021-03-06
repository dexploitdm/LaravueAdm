<p align="center">
<img src="https://pp.userapi.com/c841436/v841436793/3c3d0/8emN4vV28mM.jpg">

</p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel Admin Panel + Vue Js (Started) 

![alt text](https://pp.userapi.com/c840720/v840720468/2846c/tPXdHG1_4-s.jpg)


## Установка

`git clone https://github.com/dexploitdm/LaravueAdm.git`<hr>
`composer install`<hr>
`yarn install`

## Настройка
`php artisan migrate`<hr>
`php artisan make:auth`<hr>
- Зарегистрироватся<br>
- Откройте database/migrations/create_users_table.php и добавьте в миграцию:<br>
`$table->bigInteger('is_admin')->default(0);`
- Удаляем все мигрированные таблицы<br>
`php artisan migrate:reset` 
- мигрируем новые <br>
`php artisan migrate`
- В БД, в таблице'Users' появилась колонка is_admin, с значением 0 которое нужно поменять на 1. 

## Запуск

`yarn run watch`<hr>
`php artisan serve`<br>
- Результат `http://localhost:8000/`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
