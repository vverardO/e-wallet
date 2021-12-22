## Installation

It has as a requirement [Laravel](https://laravel.com/docs/8.x) v8+ and [Laravel - Livewire](https://laravel-livewire.com/docs/2.x/installation) v2+ for run normally.

Install dependencies and start the server.

```sh
git clone https://github.com/vverardO/turnoverbnb-code-challenge.git
cd e-wallet
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

## Access
A user with email "admin@admin.com" and password "password" will be registered by default.

Register as many users as you think necessary.

The system is hosted at [Heroku](http://powerful-eyrie-36129.herokuapp.com/login).

## Authentication
![Login](https://i.postimg.cc/GmRc7g3g/login.png)
![Register](https://i.postimg.cc/wjk9S57q/register.png)

## User
![Balance](https://i.postimg.cc/SQXNJztd/balance.png)
![Checks](https://i.postimg.cc/YqYrxB7m/checks.png)
![Expenses](https://i.postimg.cc/nV6V7cyJ/expenses.png)

## Administrator
![ChecksControl](https://i.postimg.cc/bvNq8GtQ/checks-control.png)
