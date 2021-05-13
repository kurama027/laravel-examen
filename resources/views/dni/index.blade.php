<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


<a href="{{ url('/dnis/create') }}"  class="btn btn-success"  >Agregar DNI</a> 

<table class="table table-sm table-hover"> 
    <thead class="thead-dark"> 
    <tr> 
        <th>#</th>
        <th>Nombre</th> 
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th> 
        <th>Fecha nacimiento</th> 
        <th>sexo</th> 
        <th>Estado civil</th> 
        <th>Fecha de inscripcion</th> 
        <th>Fecha de emicion</th> 
        <th>Fecha de caducidad</th> 
        <th>Numero de DNI</th> 
        <th>departemento</th>  
        <th>Provincia</th> 
        <th>Distirito</th>     
        <th>Opciones</th>
    </tr> 
    </thead>  
    <tbody> 
    @foreach ($dnis as $dnis) 
        <tr> 
            <td>{{$loop->iteration}} </td>
            <td>{{ $dnis->nombre}}</td>
            <td>{{ $dnis->appaterno}}</td> 
            <td>{{ $dnis->apmaterno}} </td> 
            <td>{{ $dnis->fechanac}}</td>  
            <td>{{ $dnis->sexo}}</td> 
            <td>{{ $dnis->escivil}}</td> 
            <td>{{ $dnis->fechains}}</td> 
            <td>{{ $dnis->fechaemi}}</td> 
            <td>{{ $dnis->fechacad}}</td> 
            <td>{{ $dnis->dninum}}</td> 
            <td>{{ $dnis->dep}}</td> 
            <td>{{ $dnis->prov}}</td> 
            <td>{{ $dnis->dist}}</td>
            <td></td>
            <td>
            <a href="{{ url('/dnis/'.$dnis->id.'/edit') }}" onclick="return confirm('Desea Actualizar?');" >Actualizar</a>
            
            | 

            <form method="post" action="{{url('/dnis/'.$dnis->id)}}" style="display:inline" >
			  
			  {{ csrf_field() }}
			  {{ method_field('DELETE') }}
			  <button class="btn btn-danger" type="submit" onclick="return confirm('Desea borrar?');">Eliminar</button>
			</form>

        </tr> 
    @endforeach
    </tbody> 
</table> 