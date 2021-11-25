<form wire:submit.prevent="store">
    @error('transaction.amount')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    @enderror
    <div class="mb-3">
        <label class="form-label">Amount</label>
        <input wire:model="transaction.amount" class="form-control" placeholder="0.00">
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
    @error('transaction.image')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    @enderror
    <div class="mb-3">
        <label class="form-label"></label>
        <div class="mb-3">
            <label class="form-label">Upload check image</label>
            <input wire:model="image" class="form-control" type="file">
        </div>
    </div>
    <div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Deposit Check</button>
    </div>
</form>