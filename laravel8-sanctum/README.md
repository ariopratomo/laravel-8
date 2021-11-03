
# Laravel8 sanctum



## Indices

* [Auth](#auth)

  * [Login](#1-login)
  * [Logout](#2-logout)
  * [Register](#3-register)

* [Notes](#notes)

  * [Created Note](#1-created-note)
  * [Delete note](#2-delete-note)
  * [Fetch All Note](#3-fetch-all-note)
  * [Fetch Noted By id](#4-fetch-noted-by-id)
  * [Update Note](#5-update-note)

* [Ungrouped](#ungrouped)

  * [Profile](#1-profile)


--------


## Auth



### 1. Login



***Endpoint:***

```bash
Method: POST
Type: 
URL: http://127.0.0.1:8000/api/login
```



***Query params:***

| Key | Value | Description |
| --- | ------|-------------|
| email | ariorio@rio.com |  |
| password | 12345678 |  |



### 2. Logout



***Endpoint:***

```bash
Method: POST
Type: 
URL: http://127.0.0.1:8000/api/logout
```
```bash
Header
Authorization : Bearer {token}
```



### 3. Register



***Endpoint:***

```bash
Method: POST
Type: 
URL: http://127.0.0.1:8000/api/register
```



***Query params:***

| Key | Value | Description |
| --- | ------|-------------|
| name | 'Ario' |  |
| email | ariorio@rio.com |  |
| password | 12345678 |  |



## Notes



### 1. Created Note



***Endpoint:***

```bash
Method: POST
Type: 
URL: http://127.0.0.1:8000/api/notes
```
```bash
Header
Authorization : Bearer {token}
```


***Query params:***

| Key | Value | Description |
| --- | ------|-------------|
| name | Catatan 1 |  |
| desc | Deskripsi catatan |  |



### 2. Delete note



***Endpoint:***

```bash
Method: DELETE
Type: 
URL: http://127.0.0.1:8000/api/notes/1
```
```bash
Header
Authorization : Bearer {token}
```


### 3. Fetch All Note



***Endpoint:***

```bash
Method: GET
Type: 
URL: http://127.0.0.1:8000/api/notes
```
```bash
Header
Authorization : Bearer {token}
```


### 4. Fetch Noted By id



***Endpoint:***

```bash
Method: GET
Type: 
URL: http://127.0.0.1:8000/api/notes/1
```
```bash
Header
Authorization : Bearer {token}
```


### 5. Update Note



***Endpoint:***

```bash
Method: PUT
Type: 
URL: http://127.0.0.1:8000/api/notes/1
```

```bash
Header
Authorization : Bearer {token}
```

***Query params:***

| Key | Value | Description |
| --- | ------|-------------|
| name | name |  |
| desc | deskripsi |  |



## Ungrouped



### 1. Profile



***Endpoint:***

```bash
Method: GET
Type: 
URL: http://127.0.0.1:8000/api/profile
```

```bash
Header
Authorization : Bearer {token}
```

---
[Back to top](#laravel8-sanctum)
> Made with &#9829; by [thedevsaddam](https://github.com/thedevsaddam) | Generated at: 2021-11-03 11:06:44 by [docgen](https://github.com/thedevsaddam/docgen)








<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
