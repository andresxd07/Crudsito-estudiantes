Formulario de edicion de estudiantes

@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/students/'.$students->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
 @include('Students.form', ['modo'=>'Editar']);

</form>
</div>
@endsection

