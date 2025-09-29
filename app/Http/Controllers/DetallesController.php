<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetallesController extends Controller
{
    public function detalles()
    {
        /*$detalles = DB::table('detalle')->get();
        return view('Detalles.listado', compact('detalles'));*/

        $detalles = DB::table('detalle')
        ->join('factura', 'detalle.factura', '=', 'factura.id')
        ->join('producto', 'detalle.producto', '=', 'producto.id')
        ->get();
        return view('Detalles.listado', compact('detalles'));
    }
}
