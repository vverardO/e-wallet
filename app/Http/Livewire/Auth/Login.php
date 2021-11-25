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

    public function login()
    {
        $credentials = $this->validate();

        return Auth::attempt($credentials)
            ? $this->redirectTo()
            : $this->addError('email', "Usuário ou senha inválido!");
    }

    public function redirectTo()
    {
        if (Auth::user()->isAdmin()) {
            return redirect()->route('checks-control.index');
        }
        
        return redirect()->route('balance');
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
