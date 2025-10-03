<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoriaModel; //Importar el modelo

class CategoryController extends Controller
{
    public function index(){
        $categorias = CategoriaModel::all(); //select *from (categoria)
        return view('Categorias.listado', compact('categorias'));
    }


    /*
        Esta función
    */
    public function form_registro(){
        return view('Categorias.form_registro');

    }

    public function registrar(Request $r){
        //Se instancia CategoriaModel (POO)
        //Request es una petición de tipo POST
        $category = new CategoriaModel();
        $category->nombreCategoria = $r->input('nombre_categoria');
        $category->descripcion = $r->input('descripcion_categoria');
        $category->save();
        //Retorna la ruta que tiene por nombre categorias
        return redirect()->route('categorias');
    }

    public function form_edicion($id){
        //Será invocada cuando el usuario de click en "editar"
        //all y findorFail(encuentra o falla) son métodos
        $category = CategoriaModel::findOrFail($id); //Retorna el registro cuyo id corresponda
        return view('Categorias.form_edicion', compact('category'));
    }

    //No es recomendable editar las llaves primarias
    public function actualizar(Request $r,$id){
        $category = CategoriaModel::findOrFail($id);
        $category->nombreCategoria = $r->input('nombre_categoria');
        $category->descripcion = $r->input('descripcion_categoria');
        $category->save();
        //Retorna la ruta que tiene por nombre categorias
        return redirect()->route('categorias');
    }

    public function eliminar($id){
        $category = CategoriaModel::findOrFail($id);
        $category->delete();
        return redirect()->route('categorias');
    }
}
