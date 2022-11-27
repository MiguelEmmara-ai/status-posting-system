<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Assignment01-Comp721

Overview The aim of this assignment is to create a diary system for a social networking site. This system will allow users to post their status and save it to a database table. These posted status details can also be retrieved using text matching and all matched status reports can be viewed in the order they are posted.

For This Version I Use Laravel Web Framework

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Getting Started
```shell
git clone https://github.com/MiguelEmmara-ai/status-posting-system.git status-posting-system
cd status-posting-system
cp .env.example .env
composer install OR composer update
php artisan key:generate
nano .env << Configure .env
```
After opning your .env file, change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

Then we can run
```shell
php artisan migrate:fresh
php artisan serve
```
## Demo
[status-posting-system.miguelemmara.me](https://assignment01laravel.miguelemmara.me/)

### Built With

This section should list any major frameworks/libraries used to bootstrap your project. Leave any add-ons/plugins for the acknowledgements section. Here are a few examples.

* [![HTML][HTML.com]][html-url]
* [![CSS][CSS.com]][css-url]
* [![Bootstrap][Bootstrap.com]][Bootstrap-url]
* [![Laravel][Laravel.com]][Laravel-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Software Architecture

Laravel framework app deployed serverless on aws using bref.sh
<br>
![Screenshot 1](https://github.com/MiguelEmmara-ai/status-posting-system/blob/master/public/screenshots/Aws%20Cloud%20Architecture%20-%20Laravel%20Serverless.png)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Screenshots
![Screenshot 1](https://github.com/MiguelEmmara-ai/Assignment01-Comp721/blob/master/screenshots/screencapture-localhost-assignment01.png)

## License
Copyright 2022. Code released under the MIT license.

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[HTML.com]: https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white
[html-url]: https://www.w3schools.com/html/
[CSS.com]: https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white
[css-url]: https://www.w3schools.com/css/
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
