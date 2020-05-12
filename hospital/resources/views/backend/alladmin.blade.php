@extends('backend.deshboard')

@section('title')
	All Admin
@endsection

@section('content-heading')
	All Admin Info
    <br>
    {{ Session::get('message') }}
@endsection

@section('maincontent')

    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
       <thead>
         <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
     </thead>
     <tbody>
        <?php
            $i=0;
        ?>
        @foreach($alladmin as $admin)
    <tr class="odd gradeX">
        <td>{{ ++$i }}</td>
        <td>{{ $admin->name }}</td>
        <td>{{ $admin->email }}</td>
        <td>{{ $admin->password }}</td>
        <td><a href="{{ url('/backend/adminedit/'.$admin->id) }}">Edit</a>
            <a href="{{ url('/backend/admindelete/'.$admin->id) }}">Delete</a>
        </td>
    </tr>
      @endforeach
    </tbody>
</table>
@endsection