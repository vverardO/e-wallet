<form>
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
        <img src="{{$transaction->image}}" class="img-fluid" alt="..."><label class="form-label"></label>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center m-b-5">
            <button class="btn btn-danger btn-md" wire:click="reject">Reject</button>
            <button class="btn btn-primary btn-md" wire:click="accept">Accept</button>
        </div>
    </div>
</form>