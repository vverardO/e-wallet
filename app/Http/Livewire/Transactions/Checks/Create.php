<?php

namespace App\Http\Livewire\Transactions\Checks;

use App\Models\Status;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public Transaction $transaction;

    public $image;

    protected $rules = [
        'transaction.amount' => 'required',
        'transaction.user_id' => 'required',
        'transaction.description' => 'sometimes',
        'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function store()
    {
        $this->validate();

        $this->transaction->setChecksTypeAttribute();
        $this->transaction->setStatusPendingAttribute();

        $this->transaction->save();

        $fileUrl = $this->image->store('images', 'public');

        $fileUrl && $this->transaction->update([
            'image' =>$fileUrl,
        ]);

        return redirect()->route('checks.index');
    }

    public function mount()
    {
        $transactionClass = app(Transaction::class);
        $this->transaction = $transactionClass;
        $this->transaction->user_id = Auth::id();
    }

    public function render()
    {
        return view('livewire.transactions.checks.create');
    }
}
