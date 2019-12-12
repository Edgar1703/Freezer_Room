@extends('adminlte::layouts.app')
@section('contentheader_title')
<h1>
<h2></h2>
</h1>
@endsection
@section('main-content')
<div class="row">
  <section class="content">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Empleados</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('empleado.create') }}" class="btn btn-info" >Actualizar</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Id_Empleado</th>
               <th>Zona_Id</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($empleados->count())  
              @foreach($empleados as $empleado)  
              <tr>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->apellido}}</td>
                <td>{{$empleado->id_empleado}}</td>
                <td>{{$empleado->zona_id}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('EmpleadoController@edit', $empleado->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('EmpleadoController@destroy', $empleado->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $empleados->links() }}
    </div>
  </div>
</section>
 
@endsection