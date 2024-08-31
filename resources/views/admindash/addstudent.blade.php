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

<h3>Add Student</h3>
<hr>
<form action="{{route('InsertStudent')}}" method="post">
    @csrf
    <div class="inputs">
        <label for="studentname">Enter Student ID</label>
        <input type="text" class="form-control" name="studentid">
    </div>
    <div class="inputs">
        <label for="studentname">Enter Student Name</label>
        <input type="text" class="form-control" name="studentname">
    </div>
    <div class="inputs">
        <label for="studentemail">Enter Student Email</label>
        <input type="text" class="form-control" name="studentemail">
    </div>
    <div class="inputs">
        <label for="studentname">Enter Student Phone Number</label>
        <input type="text" class="form-control" name="studentphone">
    </div>
    <div class="inputs">
        <label for="studentname">Enter Parental Phone Number</label>
        <input type="text" class="form-control" name="studentparentalphone">
    </div>
    <div class="inputs">
        <label for="studentname">Enter Student Address</label>
        <input type="text" class="form-control" name="studentaddress">
    </div>
    <div class="inputs">
        <label for="studentname">Select Batch</label>
        <select name="batchlist" id="" class="form-control">
            <option value="" selected disabled>Select Batch</option>
            @foreach($batch as $b)
            <option value="{{$b->id}}">{{$b->Batch_Code}}</option>
            @endforeach
        </select>
    </div>
    <div class="inputs">
    <button class="btn btn-primary w-100" type="submit">Add Student</button>
    </div>
</form>
@endsection