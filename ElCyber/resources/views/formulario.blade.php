@extends('plantilla')
@section('contenido')

@if(session()->has('confirmacion'))
    {!! "<script> Swal.fire('Listo','Tu recuerdo llego al controlador','success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-4 display-1 text-center">Formulario</h1>
<br>
<div class="container mt-5 col-md-6">
    <div>
        <div class="card-header text-center text-primary">
            Bienvenido a ElCyber <i class="bi bi-wechat"></i>
        </div>

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-warning alert-dimissible fade show text-center" role="alert">
                    <strong>Formulario Incompleto! </strong>{{$error}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif

    <div>
        <form method="post" action="{{route('consulta.store')}}">
            @csrf
            <div>
                <label class="form-label" name="labelUsuario">Usuario: </label>
                <input type="text" class="form-control" name="usuario" value="{{ old('usuario')}}">
                <p class="fw-bold text-danger"> {{$errors->first('usuario')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelNComputadora">No.Computadora: </label>
                <input class="form-control" name="ncomputadora" value="{{ old('ncomputadora')}}">
                <p class="fw-bold text-danger"> {{$errors->first('ncomputadora')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelTiempo">Tiempo: </label>
                <input class="form-control" name="tiempo" value="{{ old('tiempo')}}">
                <p class="fw-bold text-danger"> {{$errors->first('tiempo')}}</p>
            </div>
        </div>
        <div>
            <button type="submit" name="btnGuardar">Guardar</button>
        </div>
        </form>
    </div>
</div>
@stop