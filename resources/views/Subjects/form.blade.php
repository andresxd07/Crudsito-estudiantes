
<h1> {{$modo}} Materia </h1>


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

<label for="name_subject"> Nombre de la materia </label>
<input type="text" class="form-control" name="name_subject" value="{{ isset($subject->name_subject)?$subject->name_subject:old('name_subject')}}" id="name_subject"> 
</div>

<div class="form-group">
<label for="teacher">  Profesor </label>
<input type="text" class="form-control" name="teacher" value="{{ isset($subject->teacher)?$subject->teacher:old('teacher') }}" id="teacher">  
</div>

<div class="form-group">
<label for="hours"> Horas a la semana</label>
<select name="hours" class="form-control" value="{{ isset($subject->hours)?$subject->hours:old('hours') }}" id="hours">  
  <option disabled=""> Selecciona una opcion</option>
<option value="Una"> Una</option>
<option value="Dos"> Dos</option>
<option value="Tres"> Tres</option>
<option value="Cuatro"> Cuatro</option>
<option value="Cinco"> Cinco</option>
<option value="Seis"> Seis</option>

</select>

</div>

<div class="form-group">
<label for="days"> Dias </label>
<select class="form-control" name="days" value="{{ isset($subject->days)?$subject->days:old('days') }}" id="days">  
<option disabled=""> Selecciona una opcion</option>
<option value="Lunes"> Lunes</option>
<option value="Martes"> Martes</option>
<option value="Miercoles"> Miercoles</option>
<option value="Jueves">  Jueves</option>
<option value="Viernes"> Viernes</option>
<option value="Sabado"> Sabado</option>
<option value="Domingo"> Domingo</option>
</select>
</div>

<input type="submit" class="btn btn-success" value="{{ $modo }} datos">  

<a  class="btn btn-secondary" href="{{ url('subjects/')}}">Regresar</a>
<br>
