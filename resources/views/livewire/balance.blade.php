@section('header.title') Balance @endsection
<div>
    <div class="row row-cols-1 row-cols-md-1 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h2 class="my-0 fw-normal">Current balance:</h2>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">${{$checksAmount - $expensesAmount}}</h1>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-success">
                <div class="card-header py-3">
                    <h2 class="my-0 fw-normal">Incomes:</h2>
                </div>
                <div class="card-body text-success justify-content-md-between d-flex flex-wrap">
                    <h1 class="card-title pricing-card-title">${{$checksAmount}}</h1>
                    <a type="button" href="{{route('checks.create')}}" class="btn btn-primary p-3">New Income</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-danger">
                <div class="card-header py-3">
                    <h2 class="my-0 fw-normal">Expenses:</h2>
                </div>
                <div class="card-body text-danger justify-content-md-between d-flex flex-wrap">
                    <h1 class="card-title pricing-card-title">$-{{$expensesAmount}}</h1>
                    <a type="button" href="{{route('expenses.create')}}" class="btn btn-primary p-3">New Expense</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">Title</th>
                <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transactions as $transaction)
                    <tr>
                        <td>
                            <div class="text-sm text-gray-900">{{$transaction->description}}</div>
                            <div class="text-sm text-gray-500">{{$transaction->created_at}}</div>
                        </td>
                        <td>
                            <span class="@if($transaction->isCheck()) text-success @else text-danger @endif">
                                {{$transaction->amount_formatted}}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" align="center" class="">Nothing to show</td>
                    </tr>
                @endif
            </tbody>
            </table>
        </div>
    </div>
</div>
