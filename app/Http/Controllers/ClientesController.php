<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*class ClientesController extends Controller
{
    public function index(){
        $clientes = DB::table('cliente')->get(); #select * from cliente;
        return view('Clientes.Listado'); 
    }
}*/

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = DB::table('cliente')->get(); #select * from cliente (ya que funciona como la consulta en la base de datos).
        return view('Clientes.listado', compact('clientes')); #Me estaba cargando la vista pero no le estaba pasando la variable $clientes, por eso me daba error.
    }

    public function firstCustomer()
    {
        $customer = DB::table('cliente')->first();
        return view('Clientes.listadoUno', compact('customer'));
    }

    public function address()
    {
        $address = DB::table('cliente')->where('direccionCliente', 'Manrique Guadalupe')->get();
        return view('Clientes.listadoDireccion', compact('address'));
    }

    public function gender()
    {
        $gender = DB::table('cliente')->where('generoCliente', 'F')->get();
        return view('Clientes.listadoGenero', compact('gender'));
    }
}