@extends('layout')

@section('contenido')
    <div class="row">
        <div class="col">
            <h1 class="text-center">Citriom Movies</h1>
        </div>
    </div>
    <form action="/guardado" method="POST">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-4 form-group">
                <label for="">Título</label>
                <input type="text" class="form-control" name="titulo">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-4 form-group">
                <label for="">Año</label>
                <input type="text" class="form-control" name="año">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-4 form-group">
                <label for="">Género</label>
                <select name="genero_id" class="form-control">
                    <option value="">Seleccione</option>
                        @foreach ($generos as $value)
                            <option value="{{ $value->id }}">{{ $value->genero }}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-4">
                <button type="submit" class="btn btn-block btn-success">Guardar</button>
            </div>
        </div>
    </form>
    <br>
    <form action="/peliculas">
        <div class="row d-flex justify-content-center">
            <div class="col-4">
                <button type="submit" class="btn btn-block btn-success">Películas</button>
            </div>
        </div>
    </form>
@endsection
