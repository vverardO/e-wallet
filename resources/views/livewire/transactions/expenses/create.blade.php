<form wire:submit.prevent="store">
    @error('transaction.amount')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    @enderror
    <div class="mb-3">
        <label class="form-label">Amount</label>
        <input wire:model="transaction.amount" class="form-control" type="number" step="0.01" placeholder="0.00">
    </div>
    @error('transaction.date')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    @enderror
    <div class="mb-3">
        <label class="form-label">Date</label>
        <input wire:model="transaction.date" type="date" class="form-control">
    </div>
    @error('transaction.description')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea wire:model="transaction.description" class="form-control" rows="3"></textarea>
    </div>
    <div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Purchase Something</button>
    </div>
</form>