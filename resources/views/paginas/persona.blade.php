@extends('layouts.app')
@section('header-tittle')
	Bienvenido a la pagina PERSONA
@endsection
@section('content1')
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Formulario PERSONA</h5>
                    <h6 class="card-subtitle text-muted">Ingrese sus datos personales.</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{url('guardar')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apellido</label>
                            <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cedula</label>
                            <input type="text" class="form-control" placeholder="Cedula" name="cedula">
                        </div>
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
@endsection