@extends('plantilla')
@section('contenido')
    <h1 class = "mt-4 display-1 text-center"> <i class="bi bi-card-checklist"></i> Confirmar Eliminación </h1>
    <div class="container col-md-6">
        <div class="alert alert-danger alert-dimissible fade show text-center" role="alert">
        <strong>Seguro que eliminars este registro?</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </diV>
    <div class="card m-5">
        <h5 class="card-header text-center text-primary"> <i class="bi bi-calendar3"></i> {{ $pcid->usuario }} </h5>
            <div class="card-body">
                <h5 class="card-title fw-semibold text-center"> {{ $pcid->ncomputadora }} </h5>   
                <p class="card-text fw-light"> {{ $pcid->tiempo }} </p>
            </div>
            <div class="card-footer">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <form action="{{ route('formulario.destroy',$pcid->idFormulario) }}" method="POST">
                        {!! method_field('DELETE') !!}
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-outline-danger">Si, Elimínalo! </button>
                    </form>
                    <a href="{{route('consultara.index')}}" class="btn btn-outline-warning">No, Regresame! <i class="bi bi-trash"></i></a>
                </div>
            </div>
        </div>
    </div>
@stop
