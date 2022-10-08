
<h1> {{$modo}} Estudiante </h1>

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
      @foreach($errors->all() as $error)
        <li> {{ $error }} </li>
       @endforeach
    </ul>
</div>

@endif

<div class="form-group">

<label for="name"> Nombre </label>
<input type="text" class="form-control" name="name" value="{{ isset($student->name)?$student->name:old('name')}}" id="name"> 
</div>

<div class="form-group">
<label for="first_last_name"> Primer Apellido </label>
<input type="text" class="form-control" name="first_last_name" value="{{ isset($student->first_last_name)?$student->first_last_name:old('first_last_name') }}" id="first_last_name">  
</div>

<div class="form-group">
<label for="second_last_name"> Segundo Apellido </label>
<input type="text" class="form-control" name="second_last_name" value="{{ isset($student->second_last_name)?$student->second_last_name:old('second_last_name') }}" id="second_last_name">   
</div>
<div class="form-group">
<label for="mail"> Correo </label>
<input type="email" class="form-control" name="mail" value="{{ isset($student->mail)?$student->mail:old('mail') }}" id="mail">  
</div>

<div class="form-group">
<label for="photo">  </label>

@if(isset($student->photo))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$student->photo }}" width="100" alt="">
@endif
<input type="file" class="form-control" name="photo" value="" id="photo">  
</div>

<div class="form-group">
<label for="course"> Curso </label>
<select name="course" class="form-control" value="{{ isset($student->course)?$student->course:old('course') }}" id="course">  
  <option disabled=""> Selecciona una opcion</option>
<option value="Primero"> Primero</option>
<option value="Segundo"> Segundo</option>
<option value="Tercero"> Tercero</option>
<option value="Cuarto"> Cuarto</option>
<option value="Quinto"> Quinto</option>
<option value="Sexto"> Sexto</option>
<option value="Septimo"> Septimo</option>
<option value="Octavo"> Octavo</option>
<option value="Noveno"> Noveno</option>
<option value="Decimo"> Decimo</option>
<option value="Once"> Once</option>

</select>

</div>

<div class="form-group">
<label for="gender"> Genero </label>
<select class="form-control" name="gender" value="{{ isset($student->gender)?$student->gender:old('gender') }}" id="gender">  
<option disabled=""> Selecciona una opcion</option>
<option value="Masculino"> Masculino</option>
<option value="Femenino"> Femenino</option>
<option value="Sin genero"> Sin genero</option>
<option value="Prefiero no decir"> Prefiero no decir</option>
</select>

</div>
<div class="form-group">
  <label for="school"> Colegio </label>
  <input type="name" class="form-control" name="school" value="{{ isset($student->school)?$student->school:old('school') }}" id="school">  
  </div>

<input type="submit" class="btn btn-success" value="{{ $modo }} datos">  

<a  class="btn btn-secondary" href="{{ url('students/')}}">Regresar</a>
