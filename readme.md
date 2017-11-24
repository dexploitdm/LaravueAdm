<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

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
Зарегистрироватся<br>
Откройте database/migrations/create_users_table.php и добавьте в миграцию:<br>
`$table->bigInteger('is_admin')->default(0);`
- Удаляем все мигрированные таблицы 
`php artisan migrate:reset` 
И мигрируем новые 
`php artisan migrate`


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
