<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## El proyecto

DataTable con el package Yajra DataTables
## Requerimiento
- [PHP >= 7.0](http://php.net/)
- [Laravel 5.x|6.x](https://github.com/laravel/framework)

## Instalación
Clonar el repositorio

```bash
git clone https://github.com/Mofe-Saurio/Laravel-DataTable.git
```
Actualizamos el composer
```bash
composer update
```
Generamos una key si es necesario
```bash
php artisan key:generate
```

Configurar el archivo .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre de la db
DB_USERNAME=root
DB_PASSWORD=
```

Realizar la migración
```bash
php artisan migrate
```

Iniciamos el servidor
```bash
php artisan serve
```

<p align="center"><img src="https://raw.githubusercontent.com/Mofe-Saurio/Laravel-DataTable/master/public/img/datatable.PNG" width="400"></p>

## Documentación
- [Laravel DataTables Quick Starter](https://yajrabox.com/docs/laravel-datatables/master/quick-starter)
- [Laravel DataTables Documentation](http://yajrabox.com/docs/laravel-datatables)
- [Laravel DataTables API](https://datatables.net/reference/api/)

## Referencia
- [yajra/laravel-datatables](https://github.com/yajra/laravel-datatables)
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
