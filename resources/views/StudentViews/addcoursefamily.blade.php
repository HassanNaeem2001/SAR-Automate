@extends('StudentBasicNav.dashboard')
@section('content')
<div class="container-fluid mt-5">
<h3 class="text-center">Add Course Family</h3>
@if(@session('message'))
<div class="alert alert-success">
    Course Family Added Successfully
    </div>
@endif

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
<form action="{{route('inscoursefamily')}}" method="post">
    @csrf
    <input type="text" name="coursefamilynumber" class="form-control" placeholder="Course Family Number">
    <br>
    <button type="submit" class="btn btn-primary">Add Course Family</button>
</form>
    </div>
@endsection