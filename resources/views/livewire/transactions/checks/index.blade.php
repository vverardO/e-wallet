@section('header.title') Checks @endsection
<div class="container-fluid">
    <div class="row">
        <div class="card-body text-success justify-content-md-between d-flex flex-wrap">
            <h2>Checks</h2>
            <a type="button" href="{{route('checks.create')}}" class="btn btn-primary p-3">New Check</a>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab" aria-controls="pending" aria-selected="true">Pending</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="accepted-tab" data-bs-toggle="tab" data-bs-target="#accepted" type="button" role="tab" aria-controls="accepted" aria-selected="false">Accepted</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="rejected-tab" data-bs-toggle="tab" data-bs-target="#rejected" type="button" role="tab" aria-controls="rejected" aria-selected="false">Rejected</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pendingChecks as $check)
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
                                    <td>
                                        <a type="button" href="{{route('checks.show', ['id' => $check->id])}}" class="btn btn-primary p-3">Show</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" align="center" class="px-6 py-4 whitespace-nowrap">Nothing to show</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="accepted" role="tabpanel" aria-labelledby="accepted-tab">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($acceptedChecks as $check)
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
                                    <td>
                                        <a type="button" href="{{route('checks.show', ['id' => $check->id])}}" class="btn btn-primary p-3">Show</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" align="center" class="px-6 py-4 whitespace-nowrap">Nothing to show</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="rejected" role="tabpanel" aria-labelledby="rejected-tab">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($rejectedChecks as $check)
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
                                    <td>
                                        <a type="button" href="{{route('checks.show', ['id' => $check->id])}}" class="btn btn-primary p-3">Show</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" align="center" class="px-6 py-4 whitespace-nowrap">Nothing to show</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>