@extends('backend.deshboard')

@section('title')
	All Patent
@endsection

@section('content-heading')
	All Petent
@endsection

@section('maincontent')	
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
       <thead>
         <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Blood Group</th>
            <th>Gender</th><th>Age</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
     </thead>
     <tbody>
        <?php
            $i=0;
        ?>
        @foreach($allpetent as $petent)
    <tr class="odd gradeX">
        <td>{{ ++$i }}</td>
        <td>{{ $petent->name }}</td>
        <td>{{ $petent->address }}</td>
        <td>{{ $petent->email }}</td>
        <td>{{ $petent->blood_group }}</td>
        <td>{{ $petent->gender }}</td>
        <td>{{ $petent->age }}</td>
        <td>{{ $petent->password }}</td>
        <td><a href="{{ url('/backend/petentedit/'.$petent->id) }}">Edit</a>
            <a href="{{ url('/backend/petentdelete/'.$petent->id) }}">Delete</a>
        </td>
    </tr>
      @endforeach
    </tbody>
</table>
@endsection