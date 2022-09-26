Formulario de creacion de materias
@extends('layouts.app')
@section('content')
<div class="container">


<form action="{{ url ('/subjects')}}" method="post" enctype="multipart/form-data">
@csrf
@include('Subjects.form', ['modo'=>'Crear']);


</form>
</div>
@endsection
