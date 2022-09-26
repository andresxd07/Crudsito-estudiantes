Formulario de edicion de materias

@extends('layouts.app')
@section('content')
<div class="container">

    <form action="{{ route('subjects.update', $subject->id) }}" enctype="multipart/form-data" method="POST">@csrf
{{ method_field('PATCH') }}
 @include('Subjects.form', ['modo'=>'Editar']);

</form>
</div>
@endsection
