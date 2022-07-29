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


<a href="{{ url('index')}}" class="btn btn-info">Registrer new student</a>
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

    @foreach( $student as $students)
    <tr>
        <td>{{ $student->id  }}</td>


        <td>
        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$student->Photo }}" width="100" alt="">
        </td>





        <td>{{ $student->Name }}</td>
        <td>{{ $student->Firstlastname  }}</td>
        <td>{{ $student->Secondlastname }}</td>
        <td>{{ $student->Mail }}</td>
        <td>{{ $student->Course }}</td>
        <td>{{ $student->Gender }}</td>
        <td>{{ $student->School }}</td>


        <td>


            <a href="{{ url('/students/'.$student->id.'/edit')}}" class="btn btn-warning">
              Edit
            </a>


            <form action="{{ url('/students/'.$student->id ) }}" method ="post" class="d-inline">
            @csrf
            {{ method_field('DELETE')}}

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
