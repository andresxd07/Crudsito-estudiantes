Formulario de creacion de estudiantes
@extends('layouts.app')
@section('content')
<div class="container">


<form action="{{ url ('/students')}}" method="post" enctype="multipart/form-data">
@csrf
@include('Students.form', ['modo'=>'Crear']);


</form>
</div>
@endsection

