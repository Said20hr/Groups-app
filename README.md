<p align="center">
<a href="https://laravel.com" target="_blank">
<img src="public/assets/images/MAJEDB.svg" alt="majed" width="200"> </a></p>
<p align="center">

</p>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Majed Analytics

Majed Analytics is web application based on Laravel framework with expressive,
elegant syntax. 
We believe development must be an enjoyable and creative experienc
e to be truly fulfilling.
Laravel takes the pain out of development by easing common tasks
used in many web projects, such as:

- Public Landing Page
- Authentication with onboarding system.
- Multiple back-ends dashboard for Admin and  User.
- Expressive, intuitive database.
- hybrid side render `livewire` and `alpine Js`
- two middlewares `information user` and `blocked User`

## Prerequisites



**Do not use `php artisan serve` as it will result in stalled requests due to the single-threaded nature of the built-in PHP web server.**

We strongly recommend using [Laradock](https://laradock.io/) for Linux and Mac or [Laragon](https://laragon.org/download/) for Windows if possible.

Other options for your local environment:
- Windows: [How to install WAMP on Windows](https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows)
- Linux: [How to install LAMP on Linux](https://howtoubuntu.org/how-to-install-lamp-on-ubuntu)
- Mac: [How to install MAMP on MAC](https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/)

You will also need to install Composer 2: [https://getcomposer.org/doc/00-intro.md](https://getcomposer.org/doc/00-intro.md)
## Laravel API Project Installation

1. Navigate in your Laravel API project folder: `cd Groups-app`
2. Install project dependencies: `composer install`
3. Create a new .env file: `cp .env.example .env`
4. Add your own database credentials in the .env file in DB_DATABASE, DB_USERNAME, DB_PASSWORD
5. Create users table: `php artisan migrate --seed`
6. Generate application key: `php artisan key:generate`
7. Install Node: https://nodejs.org/ (version 8.11.0+ recommended)
8. Install NPM: https://www.npmjs.com/get-npm
9. Run `npm run dev` to start the application in a local development environment or `npm run watch`.

- admin type - **admin@admin.com** with the password **password**

 



