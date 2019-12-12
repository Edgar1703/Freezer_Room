@extends('adminlte::layouts.app')
@section('contentheader_title')
<h1>
<h2>Listado de frutas</h2>
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
              <a href="{{ route('fruta.create') }}" class="btn btn-info" >Añadir</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
   
               <th>Nombre</th>
               <th>Seccion</th>
               <th>Cantidad</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($frutas->count())  
              @foreach($frutas as $fruta)  
              <tr>
                <td>{{$fruta->nombre}}</td>
                <td>{{$fruta->seccion}}</td>
                <td>{{$fruta->cantidad}}</td>
                
               
                <td><a class="btn btn-primary btn-xs" href="{{action('FrutaController@edit', $fruta->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('FrutaController@destroy', $fruta->id)}}" method="post">
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
      {{ $frutas->links() }}
    </div>
  </div>
</section>
 
@endsection