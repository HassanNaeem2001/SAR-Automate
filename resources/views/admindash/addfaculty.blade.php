@extends('admindash.adminlayout.header_footer')
@section('content')
<style>
    .inputs{
        margin-top:20px
    }
</style>
<h3>Add Faculties</h3>
<hr>
<form action="" method="post">
    @csrf
    <div class="inputs">
        <label for="facultyfirstname">Enter Faculty First Name</label>
        <input type="text" class="form-control" name="facultyfirstname">
    </div>
    <div class="inputs">
        <label for="faculty">Enter Last Name</label>
        <input type="text" class="form-control" name="facultyfirstlastname">
    </div>
    
</form>
@endsection