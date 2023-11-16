@extends('admin.manager.body.agent-account')
@section('agent-account-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Agent Account</h4>
                    <a href="{{ route('add.agent.account') }}" class="btn btn-dark btn-xs">New</a>
                    <div class="table-responsive pt-3">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($data as $admin)
                            <tbody>
                                
                                <tr>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->role }}</td>
                                    <td>{{ $admin->created_at }}</td>
                                    <td><a href="{{ route ('delete.agent.account', [$admin->id]) }}" class="btn btn-danger btn-icon" id="delete-agent-account"><i data-feather="trash"></i></a></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection