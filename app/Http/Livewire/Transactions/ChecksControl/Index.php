<?php

namespace App\Http\Livewire\Transactions\ChecksControl;

use App\Models\Transaction;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $checksPending = Transaction::fromAuthenticatedUser()->checks()->pending();

        return view('livewire.transactions.checks-control.index', [
            'checks' => $checksPending->with('user')->get(),
            'checksAmount' => $checksPending->sum('amount')
        ]);
    }
}
