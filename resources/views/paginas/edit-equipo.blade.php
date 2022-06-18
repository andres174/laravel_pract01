@extends('layouts.app')
@section('header-tittle')
	Bienvenido a la pagina Ingresar Equipos
@endsection
@section('content1')
	
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Formulario :: EDITAR :: EQUIPOS</h5>
					<h6 class="card-subtitle text-muted">Ingrese los datos del equipo QUE VA A EDITAR.</h6>
				</div>
				<div class="card-body">
					<form method="POST" action="{{url('updateEquipo'.$equipo->id)}}">  {{-- cambiar aqui --}}
						@csrf
						<div class="mb-3">
							<label class="form-label">Nombre</label>
							<input value="{{$equipo->nombreEquipo}}" type="text" class="form-control" placeholder="Nombre" name="nombreEquipo">
						</div>
						<div class="mb-3">
							<label class="form-label">Imagen</label>
							<input type="text" value="{{$equipo->imagenS}}" class="form-control" placeholder="Imagen" name="imagenS">
						</div>
						{{-- <div class="mb-3">
							<label class="form-label w-100">File input</label>
							<input type="file">
							<small class="form-text d-block text-muted">Example block-level help text here.</small>
						</div> --}}
						{{-- <div class="mb-3">
							<label class="form-label">Apellido</label>
							<input type="text" class="form-control" placeholder="Apellido" name="apellido">
						</div>
						<div class="mb-3">
							<label class="form-label">Cedula</label>
							<input type="text" class="form-control" placeholder="Cedula" name="cedula">
						</div> --}}
						{{-- <div class="mb-3">
							<label class="form-label">Email address</label>
							<input type="email" class="form-control" placeholder="Email">
						</div>
						<div class="mb-3">
							<label class="form-label">Password</label>
							<input type="password" class="form-control" placeholder="Password">
						</div>
						
						
						<div class="mb-3">
							<label class="form-check">
								<input type="checkbox" class="form-check-input">
								<span class="form-check-label">Términos & Condiciones</span>
							</label>
						</div> --}}
						<button type="submit" class="btn btn-primary">Actualizar</button>
					</form>
				</div>
			</div>
		</div>
	</div>




	
@endsection