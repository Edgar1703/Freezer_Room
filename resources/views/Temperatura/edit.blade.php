@extends('adminlte::layouts.app')
@section('contentheader_title')
<h1>
<h2>Nuevo ingreso</h2>
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
						<form method="POST" action="{{ route('temperatura.update',$temperatura->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="fecha" id="fecha" class="form-control input-sm" value="{{$temperatura->fecha}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="hora" id="hora" class="form-control input-sm" value="{{$temperatura->hora}}">
									</div>
								</div>
							</div>
 
							<div class="form-group">
								<textarea name="seccion" class="form-control input-sm"  placeholder="Seccion">{{$temperatura->seccion}}</textarea>
							</div>
						
							<div class="form-group">
								<textarea name="temperatura" class="form-control input-sm" placeholder="Temperatura actual">{{$temperatura->temperaura}}</textarea>
							</div>
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="{{ route('temperatura.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection