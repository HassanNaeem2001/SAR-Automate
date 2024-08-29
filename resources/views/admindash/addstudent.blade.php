@extends('admindash.adminlayout.header_footer');
@section('content')
<style>
    .inputs{
        margin-top:20px
    }
</style>
<h3>Add Student</h3>
<hr>
<form action="" method="post">
    @csrf
    <div class="inputs">
        <label for="studentname">Enter Student Name</label>
        <input type="text" class="form-control" name="studentname">
    </div>
</form>
@endsection