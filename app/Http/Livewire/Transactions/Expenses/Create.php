<?php

namespace App\Http\Livewire\Transactions\Expenses;

use App\Models\Transaction;
use App\Rules\Purchase;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public Transaction $transaction;

    public function rules(): array
    {
        return [
            'transaction.amount' => ['required', new Purchase()],
            'transaction.user_id' => 'required',
            'transaction.date' => 'sometimes',
            'transaction.description' => 'sometimes',
        ];
    }

    public function store()
    {
        $this->validate();

        $this->transaction->setExpenseTypeAttribute();
        $this->transaction->save();

        return redirect()->route('expenses.index');
    }

    public function mount(): void
    {
        $transactionClass = app(Transaction::class);
        $this->transaction = $transactionClass;
        $this->transaction->user_id = Auth::id();
    }

    public function render()
    {
        return view('livewire.transactions.expenses.create');
    }
}
