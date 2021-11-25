<?php

namespace App\Http\Livewire\Transactions\Checks;

use App\Models\Transaction;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.transactions.checks.index', [
            'checks' => Transaction::fromAuthenticatedUser()->checks()->accepted()->get(),
        ]);
    }
}
