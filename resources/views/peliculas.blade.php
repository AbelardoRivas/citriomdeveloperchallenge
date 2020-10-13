@extends('layout')

@section('contenido')

<div class="row">
    <div class="col-12">
        <h4 class="text-center">Listado de Películas</h4>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Año</th>
                    <th>Género</th>
                    <th>Me gusta</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listado as $value)
                    <tr>
                        <td>{{ $value->titulo }}</td>
                        <td>{{ $value->año }}</td>
                        <td>{{ $value->genero }}</td>
                        <td>{{ $value->likes }}</td>
                        <td>
                            <form action="/gustado" method="POST">
                                <button type="submit" class="btn btn-primary">Like</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
