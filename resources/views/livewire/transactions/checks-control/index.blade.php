@section('header.title') Checks @endsection
<div class="container-fluid">
    <div class="row">
        <div class="card-body text-success justify-content-md-between d-flex flex-wrap">
            <h2>Checks to work - Total: ${{$checksAmount}}</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Customer - Date</th>
                        <th>Value</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($checks as $check)
                        <tr>
                            <td>
                                <div>{{$check->user->email}}</div>
                                <div>{{$check->date}}</div>
                            </td>
                            <td>
                                <span class="px-2 text-success">
                                    {{$check->amount_formatted}}
                                </span>
                            </td>
                            <td>
                                <a type="button" href="{{route('checks-control.edit', ['id' => $check->id])}}" class="btn btn-primary p-3">Show</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" align="center" class="px-6 py-4 whitespace-nowrap">Nenhuma informação a ser apresentada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>