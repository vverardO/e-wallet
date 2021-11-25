<?php

namespace App\Http\Livewire\Auth;

use App\Models\Person;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Register extends Component
{
    public User $user;

    protected $rules = [
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
        'password' => ['required', 'string', 'min:6'],
    ];

    protected $messages = [
        'password.required' => 'Necessário inserir a senha',
        'password.min' => 'Necessário mínimo 6 digitos',
        'email.required' => 'Necessário informar seu email',
        'email.email' => 'Necessário informar um email válido',
        'email.unique' => 'Este email já está em uso, tente acessar o sistema',
    ];

    public function register()
    {
        $this->validate();

        $this->user->password = Hash::make($this->user->password);
        $this->user->save();

        session()->flash("message", "Conta registrada com sucesso!");
        session()->flash("type", "success");

        Auth::login($this->user);

        return redirect('/');
    }

    public function mount()
    {
        $this->user = new User();
    }

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('layouts.auth');
    }
}
