@section('header.title') Expenses @endsection
<div class="container-fluid">
    <div class="row">
        <div class="card-body text-danger justify-content-md-between d-flex flex-wrap">
            <h2>Expenses</h2>
            <a type="button" href="{{route('expenses.create')}}" class="btn btn-primary p-3">New Expense</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($expenses as $expense)
                        <tr>
                            <td >
                                <div>{{$expense->description}}</div>
                                <div>{{$expense->created_at}}</div>
                            </td>
                            <td>
                                <span class="px-2 text-danger">
                                    {{$expense->amount_formatted}}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" align="center" class="px-6 py-4 whitespace-nowrap">Nenhuma informação a ser apresentada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>