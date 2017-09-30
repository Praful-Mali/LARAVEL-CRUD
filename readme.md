# Laravel CRUD Example

This application is a simple example of performing basic CRUD operations using Laravel 5.5 and MySql with authentication. This shows a simple management of Post wherein a user can add, edit and delete records of Post.

## Documentation

### Laravel
Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

### Other Project

This is the CSS Bootstrap theme applied in this applciation.

Source code of other CRUD can be found [Github](https://github.com/Praful-Mali/CRUD-Operation-laravel).

## License

### Laravel
The Laravel framework is open-so urced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

### SB Admin
Copyright 2013-2016 Blackrock Digital LLC. Code released under the [MIT license](https://github.com/Praful-Mali/CRUD-Operation-laravel).

## Installation

* `git clone https://github.com/hectordolo/laravel-example-crud.git`
* `cd laravel-example-crud`
* `composer install`
* `php artisan key:generate`
* copy .env.example to .env
* edit .env
    * set `DB_DATABASE="YOUR DATABASE NAME"`
    * set `DB_USERNAME="YOUR DATABASE USERNAME"`
    * set `DB_PASSWORD="YOUR DATABASE PASSWORD"`
* `php artisan migrate`
* `php artisan serve`
* You can now register a new user to use the application.
