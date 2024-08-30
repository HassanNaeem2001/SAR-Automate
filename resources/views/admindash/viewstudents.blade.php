@extends('admindash.adminlayout.header_footer')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css" />
  


<h3>All Students</h3>
<hr>
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Batch Name</th>
            <th>Student Phone</th>
        </tr>
    </thead>
    <tbody>
        @foreach($std as $s)
        <tr>
            <td>{{$s->Student_Name}}</td>
            <td>{{$s->Batch_Code}}</td>
            <td>{{$s->Student_Phone}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        responsive: true
    });
} );
</script>
@endsection