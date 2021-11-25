## Instalação

A tem como requerimento [Laravel](https://laravel.com/docs/8.x) v8+ and [Laravel - Livewire](https://laravel-livewire.com/docs/2.x/installation) v2+ para rodar normalmente.

Instale as dependencias e inicie o server.

```sh
git clone https://github.com/vverardO/turnoverbnb-code-challenge.git
cd turnoverbnb-code-challenge
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

## Acesso
Será cadastrado por padrão um usuário com email "admin@admin.com" e senha "password".

Cadastre a quantidade de usuários que achar necessário.

O sistema encontra-se hospedado no [Heroku](http://powerful-eyrie-36129.herokuapp.com/login).