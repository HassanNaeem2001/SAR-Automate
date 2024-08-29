@extends('admindash.adminlayout.header_footer')
@section('content')
<style>
    .inputs{
        margin-top:20px
    }
</style>
@if(session('insertmessage'))
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
    <p><b>Alert </b>{{session('insertmessage')}}</p>
</div>

<script>
    var alertList = document.querySelectorAll(".alert");
    alertList.forEach(function (alert) {
        new bootstrap.Alert(alert);
    });
</script>
@endif


<h1>Add Batch</h1>
<hr>
<form action="{{route('batchinsert')}}" method="post">
    @csrf
    <div class="inputs">
    <label for="batchcode">Enter Batch Code</label>
    <input type="text" name="batchcode" class="form-control">
    </div>
    <div class="inputs">
    <label for="timings">Select Timings</label>
    <select name="timings" id="" class="form-control">
        <option value="9-11">9-11</option>
        <option value="11-1">11-1</option>
        <option value="1-3">1-3</option>
        <option value="3-5">3-5</option>
        <option value="5-7">5-7</option>
        <option value="7-9">7-9</option>
    </select>
    </div>
    <div class="inputs">
        <label for="date">Start Date</label>
        <input type="date" class="form-control" name="date">
    </div>
    <div class="inputs">
        <button class="btn btn-primary w-100" type="submit">Add Batch</button>
    </div>
</form>
@endsection