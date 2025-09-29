<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacturasController extends Controller
{
    public function facturas()
    {
        /*$facturas = DB::table('factura')->get();
        return view('Facturas.listado', compact('facturas'));*/

        $facturas = DB::table('factura')
        ->join('cliente', 'factura.cliente', '=', 'cliente.id')
        ->get();
        return view('Facturas.listado', compact('facturas'));
    }
   
}
