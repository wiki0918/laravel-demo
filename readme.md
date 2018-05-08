<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


## Information

<p> Website : http://cycle.tw/</p>
<p> PHP 7.1</p>
<p> MySQL</p>


## Laravel 5.6

Model

- [Models](https://github.com/wiki0918/laravel-demo/tree/master/app/Models)

View

- [Layout](https://github.com/wiki0918/laravel-demo/blob/master/resources/views/layouts/master.blade.php#L112).
- [View](https://github.com/wiki0918/laravel-demo/blob/master/resources/views/carList.blade.php).

Controller

- [Controllers](https://github.com/wiki0918/laravel-demo/tree/master/app/Http/Controllers)

Form

- CSRF Protection [CSRF token](https://github.com/wiki0918/laravel-demo/blob/master/resources/views/carAnnounce.blade.php#L24).

Validation

- [Form Requests Rules / Meaasges](https://github.com/wiki0918/laravel-demo/blob/master/app/Http/Requests/ReservePost.php).
- [Validation](https://github.com/wiki0918/laravel-demo/blob/master/app/Http/Controllers/BookingController.php#L56).

Pagination

- [Pagination](https://github.com/wiki0918/laravel-demo/blob/master/app/Managers/CarMgr.php#L43)
- [View Link](https://github.com/wiki0918/laravel-demo/blob/master/resources/views/carList.blade.php#L31)

DataBase

- [Query Builder](https://github.com/wiki0918/laravel-demo/blob/master/app/Managers/CarMgr.php).
- [Join Table](https://github.com/wiki0918/laravel-demo/blob/master/app/Managers/BookingMgr.php#L34).

Session

- [Session](https://github.com/wiki0918/laravel-demo/blob/master/app/Http/Controllers/AdminController.php)

Api

- [url (JSON)](http://cycle.tw/booking/json?date=2018-05-06)
- [jQuery.ajax()](https://github.com/wiki0918/laravel-demo/blob/master/public/js/booking_date.js)