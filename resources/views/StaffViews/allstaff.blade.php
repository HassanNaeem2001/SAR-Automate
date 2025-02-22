
@extends('StaffNavbar.staffbasic')
@section('content')
<div class="container-fluid">
<div class="d-flex mt-3 justify-content-center align-items-center">
    
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">All Staff</h4>
        </div>
        <div class="card-body">
            
            <!-- Table for Desktop -->
            <div class="table-responsive d-none d-md-block">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Staff ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Home Phone</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($staffs as $staff)
                        <tr>
                            <td>{{ $staff->id }}</td>
                            <td>{{ $staff->StaffName }}</td>
                            <td>{{ $staff->StaffEmail }}</td>
                            <td>{{ $staff->StaffPhone }}</td>
                            <td>{{ $staff->StaffAddress }}</td>
                            <td>{{ $staff->StaffHomePhone }}</td>
                            <td>{{ $staff->RoleName }}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Cards for Mobile -->
            <div class="d-md-none">
                @foreach($staffs as $staff)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $staff->StaffName }}</h5>
                        <p class="card-text"><strong>Email:</strong> {{ $staff->StaffEmail }}</p>
                        <p class="card-text"><strong>Phone:</strong> {{ $staff->StaffPhone }}</p>
                        <p class="card-text"><strong>Address:</strong> {{ $staff->StaffAddress }}</p>
                        <p class="card-text"><strong>Home Phone:</strong> {{ $staff->StaffHomePhone }}</p>
                        <p class="card-text"><strong>Role:</strong> {{ $staff->RoleName }}</p>
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary btn-sm me-2">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>



</div>
</div>

@endsection