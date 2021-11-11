<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
The postman collection is in the root of the app

<b>To setup the project locally</b>

1. Create a new virtual host `expat.loc` to the project's public folder
2. Set the variables in `.env`
   `APP_URL`=`expat.loc`
   `ADMIN_APP_URL`=`expat.loc`
   `ADMIN_APP_PATH`=`admin`
3. Create a new postgres database and add the db settings to `.env` file
4. Run `composer install`
5. Run `php artisan migrate --seed` command
6. This will create the db tables and will create a new admin user with credentials
`username` - admin@gmail.com, `password` - 123123
7. Now you can access the admin panel with url http://expat.loc/admin
8. Login and add a new page with name `Home`
9. Add posts specifying the Page as Home in order to see the posts in Home page under recent posts section
10. Every added post with comments will be shown in Posts page of the client side
11. Enjoy

