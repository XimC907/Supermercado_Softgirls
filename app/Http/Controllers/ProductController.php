<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductoModel; //Importar el modelo

class ProductController extends Controller
{
    public function index(){
        $productos = ProductoModel::all(); //select *from (categoria)
        return view('Productos.listado', compact('productos'));
    }
}
