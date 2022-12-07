@extends('plantilla')
@section('contenido')
@if(session()->has('confircon'))
    {!! "<script> Swal.fire('Listo','Tu recuerdo llego al controlador','success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confircon')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-4 display-1 text-center">Consulta</h1>
<br>
<br>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">No.Computadora</th>
      <th scope="col">Tiempo</th>
      <th scope="col">Fecha</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  @foreach ($conCyber as $consulta)
  <tbody>
    <tr>
      <th>{{ $consulta->idFormulario }}</th>
      <td>{{ $consulta->usuario }}</td>
      <td>{{ $consulta->ncomputadora }}</td>
      <td>{{ $consulta->tiempo }}</td>
      <td>{{ $consulta->fecha }}</td>
<td>
      <a href="{{route('formulario.edit',$consulta->idFormulario)}}" class="btn btn-outline-primary">Editar <i class="bi bi-percil"></i></a>
      <a href="{{route('formulario.confirm',$consulta->idFormulario)}}" class="btn btn-outline-danger">Eliminar <i class="bi bi-percil"></i></a>
</td>
    </tr>
  </tbody>
@endforeach
</table>

@stop