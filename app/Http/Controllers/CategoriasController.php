<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller
{
     public function categorias()
     {//Muestra todos los registros
        $categorias = DB::table('categoria')->get();
        return view('Categorias.listado', compact('categorias'));
     }

     public function listarUno()
     {//Lista sólo el primer registro de la tabla
        $ca = DB::table('categoria')->first();
        return view('Categorias.listadoUno', compact('ca'));
     }

     public function listarCondicion()
     {//Filtra el o los listados que cumplan con una condición
        $ca = DB::table('categoria')->
        where('nombreCategoria', 'Carnes')
        ->get();
        return view('Categorias.listadoDos', compact('ca'));
     }
}
