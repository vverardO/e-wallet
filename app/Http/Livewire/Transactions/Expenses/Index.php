<?php

namespace App\Http\Livewire\Transactions\Expenses;

use App\Models\Transaction;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.transactions.expenses.index', [
            'expenses' => Transaction::fromAuthenticatedUser()->expenses()->get(),
        ]);
    }
}
