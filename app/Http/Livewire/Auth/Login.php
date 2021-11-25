<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public string $email;

    public string $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    protected $messages = [
        'password.required' => 'Necessário inserir a senha',
        'email.required' => 'Necessário informar seu email',
        'email.email' => 'Necessário informar um email válido',
    ];

    public function login()
    {
        $credentials = $this->validate();

        return Auth::attempt($credentials)
            ? redirect()->intended('/')
            : $this->addError('email', "Usuário ou senha inválido!");
    }

    public function mount()
    {
        $this->email = "";
        $this->password = "";
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('layouts.auth');
    }
}
