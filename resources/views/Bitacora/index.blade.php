@extends('adminlte::layouts.app')
@section('contentheader_title')
<h1>

<h2>Listado de productos</h2>
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
              <a href="{{ route('bitacora.create') }}" i class="fa fa-plus-square fa-2x" aria-hidden="true"></i>Agregar</a>
              
              
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
   
               <th>Nombre</th>
               <th>Fecha</th>
               <th>Hora</th>
               <th>Cantidad</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($bitacoras->count())  
              @foreach($bitacoras as $bitacora)  
              <tr>
                <td>{{$bitacora->nombre}}</td>
                <td>{{$bitacora->fecha}}</td>
                <td>{{$bitacora->hora}}</td>
                <td>{{$bitacora->cantidad}}</td>

                <td><a class="btn btn-primary btn-xs" href="{{action('BitacoraController@edit', $bitacora->id)}}" >
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                </td>
                <td>
                  <form action="{{action('BitacoraController@destroy', $bitacora->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit">  <i class="fa fa-trash-o fa-lg"></i> Delete</a></span></button>
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
      {{ $bitacoras->links() }}
    </div>
  </div>
</section>
 
@endsection
