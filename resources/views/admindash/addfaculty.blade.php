@extends('admindash.adminlayout.header_footer')
@section('content')
<style>
    .inputs{
        margin-top:20px
    }
</style>
@if(@session('successmessage'))
<div
    class="alert alert-primary alert-dismissible fade show"
    role="alert"
>
    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert"
        aria-label="Close"
    ></button>
    <strong>Alert</strong><p>{{session('successmessage')}}</p>
</div>

<script>
    var alertList = document.querySelectorAll(".alert");
    alertList.forEach(function (alert) {
        new bootstrap.Alert(alert);
    });
</script>
@endif

<h3>Add Faculties</h3>
<hr>
<form action="{{route('InsertFaculty')}}" method="post">
    @csrf
    <div class="inputs">
        <label for="facultyfirstname">Enter Faculty First Name</label>
        <input type="text" class="form-control" name="facultyfirstname">
    </div>
    <div class="inputs">
        <label for="faculty">Enter Last Name</label>
        <input type="text" class="form-control" name="facultylastname">
    </div>
    <div class="inputs">
        <label for="faculty">Select Faculty Timings</label>
        <select name="facultytimings" id="" class="form-control">
            <option value="9:00 AM - 5:00 PM">9:00 AM - 5:00 PM</option>
            <option value="1:00 PM - 9:00 PM">1:00 PM - 9:00 PM</option>
            <option value="5:00 PM - 9:00 PM">5:00 PM - 9:00 PM</option>
            <option value="3:00 PM - 9:00 PM">3:00 PM - 9:00 PM</option>
            <option value="9:00 AM - 1:00 PM">9:00 AM - 1:00 PM</option>
        </select>
    </div>
    <div class="inputs">
        <button type="submit" class="btn btn-primary w-100">Add Faculty</button>
    </div>
    
</form>
@endsection