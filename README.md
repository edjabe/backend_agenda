<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

La aplicación Backend_agenda es una aplicacion creada en Laravel, es una api rest que contiene los servicios que permiten verificar la disponiblidad de prestaciones brindas por las sedes establecidas.

## 1. Clonar el repositorio

``` bash
# Primero clonamos el repositorio
$ git clone https://github.com/edjabe/backend_agenda.git backend_agenda

# Ingresamos al proyecto
$ cd backend_agenda

# Se debe copiar y confiagurar el archivo .env (En caso de que este incluido saltarse este paso)
$ cp .env.example .env
```
Una vez creado el archivo .env se configura lo siguiente:

```
APP_URL=http://backend_agenda.test //Url de la aplicacion

DB_HOST=127.0.0.1 //Host del servidor de DB
DB_PORT=3306 //Puerto del servicio de DB
DB_DATABASE=agenda //Nombre de la DB
DB_USERNAME=homestead //Usuario de la DB
DB_PASSWORD=secret //Password de la DB
```
Una vez configurado el archivo .env, procedemos ingresar a la carpeta de backend_agenda e instalamos los paquete de composer que se requieren:

```
composer install
```

Una vez instalados los paquete, dentro de la carpeta de backend_agenda, ejecutamos los siguientes comandos:

```
php artisan key:gererate
php artisan jwt:secret
```
Para terminar, ejecutamos la migración y llenado de la base de datos por permedio de los siguientes comandos, recuerde que debe tener creada una base creada con anterioridad:

```
php artisan migrate //Crea cada una de las tablas utilizadas en la aplicación.
php artisan db:seed //Llena las tablas con datos configurados mediantes el factory y seed.
```



