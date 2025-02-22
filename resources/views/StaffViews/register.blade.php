@extends('StaffNavbar.staffbasic')
@section('content')
       <div class="d-flex align-items-center justify-content-center w-100" style="height: 100vh;">
        <div class="w-75">
        <h1 class="">Staff Register</h1>
        <p class="text-muted">Please fill in the form to register as a staff</p>
         @if(@session('message'))
        
        <div class="alert alert-success">Successfully registered</div>
        @endif
        
        @if($errors->any())
        <div class="alert alert-danger">Fill in all the details</div>
        @endif
        <form action="{{route('addstaff')}}" class="w-100" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" class="form-control mb-2" placeholder="Full Name" name="fullname"/>
        <input type="email" class="form-control mb-2" placeholder="Email" name="email" />
        <input type="password" class="form-control mb-2" placeholder="Password" name="password"/>
        <input type="password" class="form-control mb-2" placeholder="Confirm Password" name="confpassword"/>
        <input type="text" class="form-control mb-2" placeholder="Phone Number" name="phonenumber"/>
        <input type="text" class="form-control mb-2" placeholder="Address" name="address"/>
        <input type="text" class="form-control mb-2" placeholder="Home Phone" name="homephone"/>
        <input type="file" class="form-control mb-2" placeholder="Profile Picture" name="employeeimage"/>
        <select name="rolelist" id="" class="w-100 p-1 mt-1 mb-3">
           @foreach($roles as $role)
           <option value="{{$role->id}}" >{{$role->RoleName}}</option>
              @endforeach
        </select>
        <button class="btn btn-primary">Register</button>
       </form>
       <a href="{{route('allstaff')}}">View All Staff</a>
        </div>
       </div>
   @endsection