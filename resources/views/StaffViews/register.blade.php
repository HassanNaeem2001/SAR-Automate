@extends('StaffNavbar.staffbasic')
@section('content')
       <div class="d-flex align-items-center justify-content-center w-100" style="height: 100vh;">
        <div class="w-75">
        <h1 class="">Staff Register</h1>
        <p class="text-muted">Please fill in the form to register as a staff</p>
         <div class="alert alert-danger">The Information you provided is not correct, try again</div>
        <div class="alert alert-success">Successfully registered</div>
        <form action="" class="w-100">
        @csrf
        <input type="text" class="form-control mb-2" placeholder="Full Name" name="fullname"/>
        <input type="email" class="form-control mb-2" placeholder="Email" />
        <input type="password" class="form-control mb-2" placeholder="Password" />
        <input type="password" class="form-control mb-2" placeholder="Confirm Password" />
        <input type="text" class="form-control mb-2" placeholder="Phone Number" />
        <input type="text" class="form-control mb-2" placeholder="Address" />
        <input type="text" class="form-control mb-2" placeholder="Home Phone" />
        <input type="file" class="form-control mb-2" placeholder="Profile Picture" />
        <select name="" id="">
            <option value=""></option>
        </select>
        <button class="btn btn-primary">Register</button>
       </form>
        </div>
       </div>
   @endsection