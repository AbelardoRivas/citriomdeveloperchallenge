@extends('layout')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <h4 class="text-center">Guardado en la Base de Datos</h4>
        </div>
    </div>
    <form action="/">
        <div class="row d-flex justify-content-center">
            <div class="col-4">
                <button type="submit" class="btn btn-block btn-success">Regresar</button>
            </div>
        </div>
    </form>
@endsection
