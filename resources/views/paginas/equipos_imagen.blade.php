@extends('layouts.app')
@section('header-tittle')
	Bienvenido a la pagina Ingresar Equipos IMAGEN
@endsection
@section('content1')
	
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Formulario EQUIPOS IMAGEN</h5>
					<h6 class="card-subtitle text-muted">Ingrese los datos del equipo.</h6>
				</div>
				<div class="card-body">
					<form method="POST" action="{{url('guardarEquipo')}}">  {{-- cambiar aqui --}}
						@csrf
						<div class="mb-3">
							<label class="form-label">Nombre</label>
							<input type="text" class="form-control" placeholder="Nombre" name="nombreEquipo">
						</div>
						
						<div class="mb-3">
							<label class="form-label w-100">File input</label>
							<input type="file">
							<small class="form-text d-block text-muted">Ingrese la imagen del equipo al guardar.</small>
						</div>

                        {{-- <div class="mb-3">
							<label class="form-label">Imagen</label>
							<input type="text" class="form-control" placeholder="Imagen" name="imagenS">
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
						<button type="submit" class="btn btn-primary">Guardar</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	{{-- tabla --}}
	{{-- <div class="row">
		<div class="col-12 col-xl-6">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Hoverable Rows</h5>
					<h6 class="card-subtitle text-muted">Add <code>.table-hover</code> to enable a hover state on table rows within a
						<code>&lt;tbody&gt;</code>.</h6>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Phone Number</th>
							<th>Date of Birth</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<img src="img/avatars/avatar-5.jpg" width="48" height="48" class="rounded-circle me-2" alt="Avatar"> Michelle
								Bilodeau
							</td>
							<td>864-348-0485</td>
							<td>June 21, 1961</td>
						</tr>
						<tr>
							<td>
								<img src="img/avatars/avatar-2.jpg" width="48" height="48" class="rounded-circle me-2" alt="Avatar"> Alexander
								Groves
							</td>
							<td>914-939-2458</td>
							<td>May 15, 1948</td>
						</tr>
						<tr>
							<td>
								<img src="img/avatars/avatar-3.jpg" width="48" height="48" class="rounded-circle me-2" alt="Avatar"> Kathie
								Burton
							</td>
							<td>704-993-5435</td>
							<td>September 14, 1965</td>
						</tr>
						<tr>
							<td>
								<img src="img/avatars/avatar-4.jpg" width="48" height="48" class="rounded-circle me-2" alt="Avatar"> Daisy Seger
							</td>
							<td>765-382-8195</td>
							<td>April 2, 1971</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div> --}}
@endsection