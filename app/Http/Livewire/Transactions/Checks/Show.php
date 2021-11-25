<?php

namespace App\Http\Livewire\Transactions\Checks;

use App\Models\Transaction;
use Livewire\Component;

class Show extends Component
{
    public Transaction $transaction;

    protected $rules = [
        'transaction.amount' => 'required',
        'transaction.user_id' => 'required',
        'transaction.date' => 'sometimes',
        'transaction.description' => 'sometimes',
    ];

    public function render()
    {
        return view('livewire.transactions.checks.show');
    }

    public function mount($id): void
    {
        $transactionClass = app(Transaction::class);
        $this->transaction = $transactionClass->find($id);
    }
}
