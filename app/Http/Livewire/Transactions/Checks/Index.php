<?php

namespace App\Http\Livewire\Transactions\Checks;

use App\Models\Transaction;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $transactions = Transaction::fromAuthenticatedUser()->checks();

        return view('livewire.transactions.checks.index', [
            'acceptedChecks' => $transactions->clone()->accepted()->get(),
            'rejectedChecks' => $transactions->clone()->rejected()->get(),
            'pendingChecks' => $transactions->pending()->get(),
        ]);
    }
}
