@extends('StudentBasicNav.dashboard')
@section('content')
<div class="container-fluid mt-5">
<h3 class="text-center">Batch Register</h3>
<form action="" method="post">
    @csrf
    <input type="text" class="form-control" placeholder="Batch Code" name="BatchCode">
    <br>
    <select name="BatchType" id="" class="w-100 p-1">
        <option value="" selected disabled>Select Batch Type</option>
        <option value="">ACCP</option>
        <option value="">Short Course</option>
        <option value="">Digital Marketing</option>
    </select>
    <select name="BatchTimings" id="" class="w-100 p-1 mt-3">
        <option value="" selected disabled>Select Batch Timings</option>
        <option value="9-11 AM (Morning)">9-11 AM (Morning)</option>
        <option value="11-1 PM (Afternoon)">11-1 PM (Afternoon)</option>
        <option value="1-3 PM (Afternoon)">1-3 PM (Afternoon)</option>
        <option value="5-7 PM (Evening)">5-7 PM (Evening)</option>
        <option value="7-9 PM (Night)">7-9 PM (Night)</option>
    </select>
    <select name="BatchCourse" id="" class="w-100 p-1 mt-3">
        <option value="" selected disabled>Select Batch Course Family</option>
         @foreach($rec as $r)
         <option value="">{{$r->Course_Family_Number}}</option>
         @endforeach
    </select>
    <select name="BatchFaculty" id="" class="w-100 p-1 mt-3">
        <option value="" selected disbaled>Select Faculty</option>
        @foreach($rec2 as $f)
        <option value="{{$f->id}}">{{$f->StaffName}}</option>
        @endforeach
    </select>
    <br>
    <button class="btn btn-primary mt-3">Register Batch</button>
</form>

    </div>
@endsection