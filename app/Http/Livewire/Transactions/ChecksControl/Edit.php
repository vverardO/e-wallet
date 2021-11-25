<?php

namespace App\Http\Livewire\Transactions\ChecksControl;

use App\Models\Transaction;
use Livewire\Component;

class Edit extends Component
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
        return view('livewire.transactions.checks-control.edit');
    }

    public function mount($id): void
    {
        $transactionClass = app(Transaction::class);
        $this->transaction = $transactionClass->find($id);
    }

    public function accept()
    {
        $this->transaction->setStatusAcceptedAttribute();
        $this->transaction->save();

        return redirect()->route('checks-control.index');
    }

    public function reject()
    {
        $this->transaction->setStatusRejectedAttribute();
        $this->transaction->save();

        return redirect()->route('checks-control.index');
    }
}
