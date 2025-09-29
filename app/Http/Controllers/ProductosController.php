<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function productos()
    {
        /*$productos = DB::table('producto')->get();
        return view('Productos.listado', compact('productos'));*/

        /*Lista todos los datos usando join
        $productos = DB::table('producto')
        ->join('categoria', 'producto.categoria', '=', 'categoria.id')
        ->get();
        return view('Productos.listado', compact('productos'));*/

        //Todo: Filtra los productos son el precio menor a 10000
        /*$productos = DB::table('producto')
        ->join('categoria', 'producto.categoria', '=', 'categoria.id')
        ->where('precioProducto', '<', 10000)
        ->get();
        return view('Productos.listado', compact('productos'));*/



         /*$productos = DB::table('producto')
        ->join('categoria', 'producto.categoria', '=', 'categoria.id')
        ->where('nombreProducto', 'like', '%o')
        ->where('cantidadProducto', '=', '50')
        ->get();
        return view('Productos.listado', compact('productos'));*/



        $productos = DB::table('producto')
        ->join('categoria', 'producto.categoria', '=', 'categoria.id')
        ->where('precioProducto', '>', 1000)
        ->orderby('nombreProducto', 'asc')
        ->get();
        return view('Productos.listado', compact('productos'));
    }
}
