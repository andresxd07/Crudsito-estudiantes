Formulario de edicion de estudiantes

@extends('layouts.app')
@section('content')
<div class="container">

    <form action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data" method="POST">@csrf
{{ method_field('PATCH') }}
 @include('Students.form', ['modo'=>'Editar']);

</form>
</div>
@endsection

