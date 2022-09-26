
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

<label for="NameSubject"> Nombre de la materia </label>
<input type="text" class="form-control" name="NameSubject" value="{{ isset($subject->NameSubject)?$subject->NameSubject:old('NameSubject')}}" id="NameSubject"> 
</div>

<div class="form-group">
<label for="Teacher">  Profesor </label>
<input type="text" class="form-control" name="Teacher" value="{{ isset($subject->Teacher)?$subject->Teacher:old('Teacher') }}" id="Teacher">  
</div>

<div class="form-group">
<label for="Hours"> Horas a la semana</label>
<select name="Hours" class="form-control" value="{{ isset($subject->Hours)?$subject->Hours:old('Hours') }}" id="Hours">  
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
<label for="Days"> Dias </label>
<select class="form-control" name="Days" value="{{ isset($subject->Days)?$subject->Days:old('Days') }}" id="Days">  
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
