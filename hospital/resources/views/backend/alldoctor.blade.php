@extends('backend.deshboard')

@section('title')
	All Doctors
@endsection

@section('content-heading')
	Doctors Info
    <br>
    <h3>{{ Session::get('message') }}</h3>
@endsection

@section('maincontent')

<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
       <thead>
         <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>designation</th>
            <th>number</th>
            <th>address</th>
            <th>gender</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
     </thead>
     <tbody>
        <?php
            $i=0;
        ?>
        @foreach($alldoctor as $doctor)
    <tr class="odd gradeX">
        <td>{{ ++$i }}</td>
        <td>{{ $doctor->name }}</td>
        <td>{{ $doctor->email }}</td>
        <td>{{ $doctor->designation }}</td>
        <td>{{ $doctor->number }}</td>
        <td>{{ $doctor->address }}</td>
        <td>{{ $doctor->gender }}</td>
        <td>{{ $doctor->password }}</td>
        <td><a href="{{ url('/backend/doctoredit/'.$doctor->id) }}">Edit</a>
            <a href="{{ url('/backend/doctordelete/'.$doctor->id) }}">Delete</a>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>
@endsection