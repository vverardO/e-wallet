<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public string $name = "";

    public string $email = "";

    public string $password = "";

    public User $user;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function register()
    {
        $credentials = $this->validate();

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->password = Hash::make($this->password);
        $this->user->save();

        session()->flash("message", "Conta registrada com sucesso!");
        session()->flash("type", "success");

        Auth::login($this->user);

        if (Auth::user()->isAdmin()) {
            return redirect()->route('transactions.checks-control.index');
        }
        
        return redirect()->route('balance');
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
