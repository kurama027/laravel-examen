<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
Estoy en estudiante crear 


<form action="{{url('/dnis')}}" method="Post">
@csrf

Nombre: <input type="text" name="nombre" id="nombre" value=""> 
<br>
Ap.Patero: <input type="text" name="appaterno" id="appaterno" value=""> 
<br> 
Ap.Materno: <input type="text" name="apmaterno" id="apmaterno" value=""> 
<br> 
Fecha nacimiento: <input type="text" name="fechanac" id="fechanac" value=""> 
<br>  
Sexo: <input type="text" name="sexo" id="sexo" value=""> 
<br> 
Estado civil: <input type="text" name="escivil" id="escivil" value=""> 
<br> 
Fecha de inscripcion: <input type="text" name="fechains" id="fechains" value=""> 
<br> 
Fecha de emicion: <input type="text" name="fechaemi" id="fechaemi" value=""> 
<br> 
Fecha de caducidad: <input type="text" name="fechacad" id="fechacad" value=""> 
<br> 
DNI: <input type="text" name="dninum" id="dninum" value=""> 
<br> 
Departamento: <input type="text" name="dep" id="dep" value=""> 
<br> 
Provincia: <input type="text" name="prov" id="prov" value=""> 
<br> 
Distrito: <input type="text" name="dist" id="dist" value=""> 
<br>
<input type ="submit" value="Registrar"> 
</form>
