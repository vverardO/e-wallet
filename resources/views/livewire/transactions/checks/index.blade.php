@section('header.title') Checks @endsection
<div class="container-fluid">
    <div class="row">
        <div class="card-body text-success justify-content-md-between d-flex flex-wrap">
            <h2>Checks</h2>
            <a type="button" href="{{route('checks.create')}}" class="btn btn-primary p-3">New Check</a>
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
                    @forelse ($checks as $check)
                        <tr>
                            <td >
                                <div>{{$check->description}}</div>
                                <div>{{$check->created_at}}</div>
                            </td>
                            <td>
                                <span class="px-2 text-success">
                                    {{$check->amount_formatted}}
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