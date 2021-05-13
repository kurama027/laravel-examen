<form action="{{url('/dnis/'.$dni->id)}}" method="post" >

	{{ csrf_field() }}	
	{{ method_field('PATCH') }}	

	<div class="form-group">
 

    <label for="Nombre"  class="control-label" >{{'Nombre'}}</label>
	<input type="text" placeholder="Nombre"  name="nombre" id="nombre" 	value="{{ isset($dni->nombre)?$dni->nombre:old('nombre') }}">
    
    {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>')  !!}

    <br>
    <label for="Paterno"  class="control-label" >{{'Paterno'}}</label>
    <input type="text" placeholder="paterno"  name="appaterno" id="appaterno" 	value="{{ isset($dni->appaterno)?$dni->appaterno:old('appaterno') }}">
    
    {!! $errors->first('appaterno','<div class="invalid-feedback">:message</div>')  !!}

	<br>

    <label for="Materno"  class="control-label" >{{'Materno'}}</label>
    <input type="text" placeholder="escribe tu apellido materno"  name="apmaterno" id="apmaterno" 	value="{{ isset($dni->apmaterno)?$dni->apmaterno:old('apmaterno') }}">
    
    {!! $errors->first('apmaterno','<div class="invalid-feedback">:message</div>')  !!}

    <br> 
    <label for="Fecha de nacimiento"  class="control-label" >{{'Nacimiento'}}</label>
	<input type="text" placeholder="nacimiento"  name="fechanac" id="fechanac" 	value="{{ isset($dni->fechanac)?$dni->fechanac:old('fechanac') }}">
    
    {!! $errors->first('fechanac','<div class="invalid-feedback">:message</div>')  !!}

    <br> 

    <label for="Sexo"  class="control-label" >{{'Genero'}}</label>
	<input type="text" placeholder="sexo"  name="sexo" id="sexo" 	value="{{ isset($dni->sexo)?$dni->sexo:old('sexo') }}">
    
    {!! $errors->first('sexo','<div class="invalid-feedback">:message</div>')  !!}

    <br>

    <label for="Estad civil"  class="control-label" >{{'Estado civil'}}</label>
	<input type="text" placeholder="Estado civil"  name="escivil" id="escivil" 	value="{{ isset($dni->escivil)?$dni->escivil:old('escivil') }}">
    
    {!! $errors->first('escivil','<div class="invalid-feedback">:message</div>')  !!}

    <br>

    <label for="Fecha de inscripcion"  class="control-label" >{{'inscripcion'}}</label>
	<input type="text" placeholder="inscripcion"  name="fechains" id="fechains" 	value="{{ isset($dni->fechains)?$dni->fechains:old('fechains') }}">
    
    {!! $errors->first('fechains','<div class="invalid-feedback">:message</div>')  !!}

    <br>

    <label for="Fecha de emicion"  class="control-label" >{{'emicion'}}</label>
	<input type="text" placeholder="Emicion"  name="fechaemi" id="fechaemi" 	value="{{ isset($dni->fechaemi)?$dni->fechaemi:old('fechaemi') }}">
    
    {!! $errors->first('fechaemi','<div class="invalid-feedback">:message</div>')  !!}

    <br>

    <label for="Fecha de caducidad"  class="control-label" >{{'caducidad'}}</label>
	<input type="text" placeholder="Fecha de caducidad"  name="fechacad" id="fechacad" 	value="{{ isset($dni->fechacad)?$dni->fechacad:old('fechacad') }}">
    
    {!! $errors->first('fechacad','<div class="invalid-feedback">:message</div>')  !!}

    <br>

    <label for="DNI"  class="control-label" >{{'DNI'}}</label>
	<input type="text" placeholder="numero de DNI"  name="dninum" id="dninum" 	value="{{ isset($dni->dninum)?$dni->dninum:old('dninum') }}">
    
    {!! $errors->first('dninum','<div class="invalid-feedback">:message</div>')  !!}

    <br>
    <label for="Departamento"  class="control-label" >{{'Departamento'}}</label>
	<input type="text" placeholder="Departamento"  name="dep" id="dep" 	value="{{ isset($dni->dep)?$dni->dep:old('dep') }}">
    
    {!! $errors->first('dep','<div class="invalid-feedback">:message</div>')  !!}

    <br> 

    <label for="Provincia"  class="control-label" >{{'Provincia'}}</label>
	<input type="text" placeholder="Provincia"  name="prov" id="prov" 	value="{{ isset($dni->prov)?$dni->prov:old('prov') }}">
    
    {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>')  !!}

    <br>

    <label for="Distrito"  class="control-label" >{{'Distrito'}}</label>
	<input type="text" placeholder="Distrito"  name="dist" id="dist" 	value="{{ isset($dni->dist)?$dni->dist:old('dist') }}">
    
    {!! $errors->first('dist','<div class="invalid-feedback">:message</div>')  !!}

    <br>

    <br>

    <input type="submit"  class="btn btn-success" value="Actualizar">
    </div>
</form>