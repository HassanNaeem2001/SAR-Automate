@extends('admindash.adminlayout.header_footer')
@section('content')
<style>
    .inputs{
        margin-top:20px
    }
</style>
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
    <strong>Batch Added</strong>Successfully !
</div>

<script>
    var alertList = document.querySelectorAll(".alert");
    alertList.forEach(function (alert) {
        new bootstrap.Alert(alert);
    });
</script>


<h1>Add Batch</h1>
<hr>
<form action="" method="post">
    @csrf
    <div class="inputs">
    <label for="batchcode">Enter Batch Code</label>
    <input type="text" name="batchode" class="form-control">
    </div>
    <div class="inputs">
    <label for="timings">Select Timings</label>
    <select name="timings" id="" class="form-control">
        <option value="">9-11</option>
        <option value="">11-1</option>
        <option value="">1-3</option>
        <option value="">3-5</option>
        <option value="">5-7</option>
        <option value="">7-9</option>
    </select>
    </div>
    <div class="inputs">
        <label for="date">Start Date</label>
        <input type="date" class="form-control">
    </div>
    <div class="inputs">
        <button class="btn btn-primary w-100">Add Batch</button>
    </div>
</form>
@endsection