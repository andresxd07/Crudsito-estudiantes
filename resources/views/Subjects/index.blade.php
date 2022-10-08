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

<a href="{{ url('subjects/create')}}" class="btn btn-info">Registrer new subject</a>
</br>
</br>
<div class="table-responsive">
<table class="table table-dark table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>NameSubject</th>
            <th>Teacher</th>
            <th>Hours</th>
            <th>Days</th>
        </tr>
    </thead>
<tbody>
    @foreach( $subjects as $subject)
    <tr>
        <td>{{ $subject->id  }}</td>
       
        <td>{{ $subject->name_subject }}</td>
        <td>{{ $subject->teacher  }}</td>
        <td>{{ $subject->hours }}</td>
        <td>{{ $subject->days }}</td>
        <td>

            <a href="{{ route('subjects.edit', $subject->id)}}" class="btn btn-warning">
              Edit
            </a>

            <form action="{{ route('subjects.delete', $subject->id)}}" method="POST">
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
