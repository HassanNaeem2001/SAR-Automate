@extends('admindash.adminlayout.header_footer')
@section('content')

<h3>All Students</h3>
<hr>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Batch Name</th>
            <th>Faculty Name</th>
            <th colspan="3">Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($std as $s)
        <tr>
            <td>{{$s->Student_Name}}</td>
            <td>{{$s->Batch_Code}}</td>
            <td>{{$s->Faculty_First_Name}}</td>
            <td>
                <form action="" method="post">
                    <i class="fa fa-trash" style="color: red;font-size:20px;"></i>
                    
                </form>
            </td>
            <td>
                <form action="" method="post">
                    <i class="fa fa-pen" style="color: blue;font-size:20px;"></i>
                    
                </form>
            </td>
            <td>
                <form action="" method="post">
                    <i class="fa fa-eye" style="color: black;font-size:20px;"></i>
                    
                </form>
            </td>
       
        </tr>
       
        @endforeach
    </tbody>
</table>
{{$std->links()}}
@endsection