<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Genero;
use DB;

class PeliculaController extends Controller
{
    public function inicio () {

        $generos = Genero::select()
                       ->orderBy('id', 'asc')
                       ->get();

        return view("inicio", compact("generos"));
    }

    public function guardar (Request $request) {

        $pelicula = new Pelicula;

        $pelicula->titulo = $request->titulo;
        $pelicula->año = $request->año;
        $pelicula->genero_id = $request->genero_id;

        $pelicula->save();

        return view("guardado");
    }

    public function listado () {

        $listado = Pelicula::select()
        ->leftjoin('generos', 'generos.id', '=', 'peliculas.genero_id')
        ->get();

        return view("peliculas", compact("listado"));
    }

    public function megusta () {


        return view("inicio");
    }
}
