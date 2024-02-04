<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


#Capi Examen Backend Por Fabian Loaeza
1. Clonar proyecto
2. Ejecutar composer para instalar para instalar librerias y dependencias 
``` 
composer install 
```
3. Clonar el archivo ``` .env.template ``` y renombrarlo a ``` .env ```
4. Generar php key
``` 
php artisan key:generate
```
4. Cambiar las variables de entorno
5. Levantar la base de datos, migrar y ejecutar las seed
```
php artisan migrate:fresh --seed
```
6. Levantar: ``` php artisan serve ``` 
