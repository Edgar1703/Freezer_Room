@extends('adminlte::layouts.app')
@section('contentheader_title')
<h1>
<h2>Secciones del cuarto</h2>
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
              <a href="{{ route('seccion.create') }}" class="btn btn-info" >Añadir</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
   
               <th>SeccionA</th>
               <th>SeccionB</th>
               <th>SeccionC</th>
               <th>SeccionD</th>
               <th>SeccionE</th>
               <th>SeccionF</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>

             <thead>
   
               <td>Carnes</td>
               <td>Mariscos</td>
               <td>Frutas</td>
               <td>Verduras</td>
               <td>Lacteos</td>
               <td>Embutidos</td>
               
             </thead>


             <tbody>
              @if($secciones->count())  
              @foreach($secciones as $seccion)  
              <tr>
                <td>{{$seccion->seccionA}}</td>
                <td>{{$seccion->seccionB}}</td>
                <td>{{$seccion->seccionC}}</td>
                <td>{{$seccion->seccionD}}</td>
                <td>{{$seccion->seccionE}}</td>
                <td>{{$seccion->seccionF}}</td>
               
                <td><a class="btn btn-primary btn-xs" href="{{action('SeccionController@edit', $seccion->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('SeccionController@destroy', $seccion->id)}}" method="post">
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
      {{ $secciones->links() }}
    </div>
  </div>
</section>
 
@endsection