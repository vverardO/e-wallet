<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            @if(Auth::user()->isNotAdmin())
                <li><a href="{{route('balance')}}" class="nav-link px-2 {{(request()->routeIs('balance*')) ? 'link-primary' : 'link-dark'}}">Balance</a></li>
                <li><a href="{{route('expenses.index')}}" class="nav-link px-2 {{(request()->routeIs('expenses.*')) ? 'link-primary' : 'link-dark'}}">Expenses</a></li>
                <li><a href="{{route('checks.index')}}" class="nav-link px-2 {{(request()->routeIs('checks.*')) ? 'link-primary' : 'link-dark'}}">Checks</a></li>
            @else
                <li><a href="{{route('checks-control.index')}}" class="nav-link px-2 {{(request()->routeIs('checks-control.*')) ? 'link-primary' : 'link-dark'}}">Check Control</a></li>
            @endif
        </ul>
        <span>{{Auth::user()->name}} welcome!</span>
        <div class="col-md-3 text-end">
            <button type="button" wire:click="logout" class="btn btn-primary">Logout</button>
        </div>
    </header>
</div>