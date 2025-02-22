@extends('StaffNavbar.staffbasic')
@section('content')
<div class="container-fluid">
<div class="d-flex mt-3 justify-content-center align-items-center">
    
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Roles</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Role ID</th>
                                <th>Role Name</th>
                               
                                <th>Role Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{$role->RoleName}}</td>
                               
                                <td>
                                    @if($role->RoleStatus == 'Active')
                                    <span class="badge badge-success bg-success">Active</span>
                                    @else
                                    <span class="badge badge-danger bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection