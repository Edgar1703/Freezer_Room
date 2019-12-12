@extends('adminlte::layouts.app')
@section('contentheader_title')
<h1>
<h2>Registrar nuevo producto</h2>
</h1>
@endsection
@section('main-content')
<div class="row">
  <section class="content">
    <div class="col-md-12">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Error!</strong> Revise los campos obligatorios.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @if(Session::has('success'))
      <div class="alert alert-info">
        {{Session::get('success')}}
      </div>
      @endif
 
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"></h3>
        </div>
        <div class="panel-body">          
          <div class="table-container">
            <form method="POST" action="{{ route('bitacora.store') }}"  role="form">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre del producto">
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="fecha" id="fecha" class="form-control input-sm" placeholder="Fecha de ingreso">
                  </div>
                </div>
              </div>

               <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="hora" id="hora" class="form-control input-sm" placeholder="Hora de registro">
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="cantidad" id="cantidad" class="form-control input-sm" placeholder="Cantidad ingresada">
                  </div>
                </div>
              </div>
 
             
              
              <div class="row">
 
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit"  value="Guardar" class="btn btn-success btn-block">
                  <a href="{{ route('bitacora.index') }}" class="btn btn-info btn-block" >Atrás</a>
                </div>  
 
              </div>
            </form>
          </div>
        </div>
 
      </div>
    </div>
  </section>
@endsection