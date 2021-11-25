<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class Balance extends Component
{
    public function render()
    {

        $transactions = Transaction::fromAuthenticatedUser();

        return view('livewire.balance', [
            'transactions' => $transactions->orderBy('created_at', 'desc')->get(),
            'expensesAmount' => $transactions->clone()->expenses()->sum('amount'),
            'checksAmount' => $transactions->clone()->checks()->accepted()->sum('amount')
        ]);
    }
}
