@extends('admindash.adminlayout.header_footer')
@section('content')
<style>
    .inputs{
        margin-top:20px
    }
</style>
<h1>Add Batch</h1>
<hr>
<form action="" method="post">
    @csrf
    <div class="inputs">
    <label for="batchcode">Enter Batch Code</label>
    <input type="text" name="batchode" class="form-control">
    </div>
</form>
@endsection