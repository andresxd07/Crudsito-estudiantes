@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">

    {{ Session::get('mensaje')}}
    <button type="button" class="close" data-dismiss="alert" aria-Label="Close">

        <span aria-hidde="true">&times;</span>
    </button>
</div>
@endif

<a href="{{ url('students/create')}}" class="btn btn-info">Registrer new student</a>
</br>
</br>
<div class="table-responsive">
<table class="table table-dark table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Photo</th>
            <th>Name</th>
            <th>First lastname</th>
            <th>Second lastname</th>
            <th>Mail</th>
            <th>Course</th>
            <th>Gender</th>
            <th>School</th>
            <th>Actions</th>
        </tr>
    </thead>
<tbody>
    @foreach( $students as $student)
    <tr>
        <td>{{ $student->id  }}</td>
        <td>       
        <img src="images/{{ $student->photo }}" class="img-thumbnail img-fluid" width="200" alt=".">

        </td>

        <td>{{ $student->name }}</td>
        <td>{{ $student->first_last_name  }}</td>
        <td>{{ $student->second_last_name }}</td>
        <td>{{ $student->mail }}</td>
        <td>{{ $student->course }}</td>
        <td>{{ $student->gender }}</td>
        <td>{{ $student->school }}</td>
        <td>

            <a href="{{ route('students.edit', $student->id)}}" class="btn btn-warning">
              Edit
            </a>

            <form action="{{ route('students.delete', $student->id)}}" method="POST">
                @csrf
                @method('DELETE')

            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Delete" class="btn btn-danger">
            </form>
        </td>

       
    </tr>
    @endforeach
</tbody>
</table>
</div>

</div>
@endsection
