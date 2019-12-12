@extends('adminlte::layouts.app')
@section('contentheader_title')
<h1>
<h2>Listado de temperaturas estandar en cada seccion</h2>
</h1>
@endsection
@section('main-content')
<div class="row">
  <section class="content">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3></h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('temperatura.create') }}" class="btn btn-info" >Añadir</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
   
               <th>Fecha</th>
               <th>Hora</th>
               <th>Seccion</th>
               <th>Temperatura</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($temperaturas->count())  
              @foreach($temperaturas as $temperatura)  
              <tr>
                <td>{{$temperatura->fecha}}</td>
                <td>{{$temperatura->hora}}</td>
                <td>{{$temperatura->seccion}}</td>
                <td>{{$temperatura->temperatura}}</td>
               
                <td><a class="btn btn-primary btn-xs" href="{{action('TemperaturaController@edit', $temperatura->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('TemperaturaController@destroy', $temperatura->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash-o fa-lg"></i> Delete</a></button>
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
      {{ $temperaturas->links() }}
    </div>
  </div>
</section>
 
@endsection