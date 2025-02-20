@extends('StaffNavbar.staffbasic')
@section('content')
       
       <div class="d-flex align-items-center justify-content-center w-100" style="height: 100vh;">
        <div class="w-75">
        <h1 class="">Add Roles</h1>
        <p class="text-muted">Fill this form for adding roles for your system</p>
        @if(@session('message'))
        <div class="alert alert-success">Successfully registered</div>
        @endif
        @if($errors->any())
        <div class="alert alert-danger">The information you provided is not correct</div>
        @endif
        <form action="{{route('addrole')}}" method="post" class="w-100">
        @csrf
        <input type="text" class="form-control mb-2" name="RoleName" placeholder="Designation Name" name="designation"/>
        <button class="btn btn-primary" type="submit">Add Role</button>
       </form>
       <br>
       <a href="{{route('allroles')}}">View Roles</a>
        </div>
       </div>
   
@endsection