@extends('StudentBasicNav.dashboard')
@section('content')
<div class="container-fluid mt-5">
<h3 class="text-center">Batch Register</h3>
<form action="">
    
    <input type="text" class="form-control" placeholder="Batch Code" name="BatchCode">
    <br>
    <select name="BatchType" id="" class="w-100 p-1">
        <option value="" selected disabled>Select Batch Type</option>
        <option value="">ACCP</option>
        <option value="">Short Course</option>
        <option value="">Digital Marketing</option>
    </select>
    <select name="BatchType" id="" class="w-100 p-1">
        <option value="" selected disabled>Select Batch Course Family</option>
        <option value="">ACCP</option>
        <option value="">Short Course</option>
        <option value="">Digital Marketing</option>
    </select>
    <br>
    
</form>

    </div>
@endsection