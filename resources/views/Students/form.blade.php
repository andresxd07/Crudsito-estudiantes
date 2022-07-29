

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

<label for="Name"> Nombre </label>
<input type="text" class="form-control" name="Name" value="{{ isset($student->Name)?$student->Name:old('Name')}}" id="Name"> 
</div>

<div class="form-group">
<label for="Firstlastname"> Primer Apellido </label>
<input type="text" class="form-control" name="Firstlastname" value="{{ isset($student->Firstlastname)?$student->Firstlastname:old('Firstlastname') }}" id="Firstlastname">  
</div>

<div class="form-group">
<label for="Secondlastname"> Segundo Apellido </label>
<input type="text" class="form-control" name="Secondlastname" value="{{ isset($student->Secondlastname)?$student->Secondlastname:old('Secondlastname') }}" id="Secondlastname">   
</div>
<div class="form-group">
<label for="Mail"> Correo </label>
<input type="email" class="form-control" name="Mail" value="{{ isset($student->Mail)?$student->Mail:old('Mail') }}" id="Mail">  
</div>

<div class="form-group">
<label for="Photo">  </label>

@if(isset($student->Photo))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$student->Photo }}" width="100" alt="">
@endif
<input type="file" class="form-control" name="Photo" value="" id="Photo">  
</div>

<div class="form-group">
<label for="Course"> Curso </label>
<select name="Course" class="form-control" value="{{ isset($student->Course)?$student->Course:old('Course') }}" id="Course">  
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
<label for="Gender"> Genero </label>
<select class="form-control" name="Gender" value="{{ isset($student->Gender)?$student->Gender:old('Gender') }}" id="Gender">  
<option disabled=""> Selecciona una opcion</option>
<option value="Masculino"> Masculino</option>
<option value="Femenino"> Femenino</option>
<option value="Sin genero"> Sin genero</option>
<option value="Prefiero no decir"> Prefiero no decir</option>
</select>

</div>
<div class="form-group">
  <label for="School"> Colegio </label>
  <input type="name" class="form-control" name="School" value="{{ isset($student->School)?$student->School:old('School') }}" id="School">  
  </div>

  

<input type="submit" class="btn btn-success" value="{{ $modo }} datos">  

<a  class="btn btn-secondary" href="{{ url('students/')}}">Regresar</a>
<br>


