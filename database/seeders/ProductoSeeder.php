<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            [
                'nombreProducto' => 'Pollo',
                'cantidadProducto' => 50,
                'precioProducto' => 15000,
                'fotoProducto' => 'pollo.jpg',
                'categoria' => 2
            ],

            [
                'nombreProducto' => 'Fabuloso',
                'cantidadProducto' => 35,
                'precioProducto' => 3500,
                'fotoProducto' => 'fabuloso.jpg',
                'categoria' => 1
            ],

            [
                'nombreProducto' => 'Yogurt',
                'cantidadProducto' => 30,
                'precioProducto' => 2000,
                'fotoProducto' => 'yogurt.jpg',
                'categoria' => 3
            ],

            [
                'nombreProducto' => 'Atún',
                'cantidadProducto' => 20,
                'precioProducto' => 5000,
                'fotoProducto' => 'atun.jpg',
                'categoria' => 2
            ],

            [
                'nombreProducto' => 'Leche deslactosada',
                'cantidadProducto' => 50,
                'precioProducto' => 3500,
                'fotoProducto' => 'lechedeslac.jpg',
                'categoria' => 3
            ],

            [
                'nombreProducto' => 'Jabón en Barra',
                'cantidadProducto' => 40,
                'precioProducto' => 3000,
                'fotoProducto' => 'jabonbarra.jpg',
                'categoria' => 1
            ],

            [
                'nombreProducto' => 'Aromatel',
                'cantidadProducto' => 40,
                'precioProducto' => 4500,
                'fotoProducto' => 'aromatel.jpg',
                'categoria' => 1
            ],

            [
                'nombreProducto' => 'Quita manchas',
                'cantidadProducto' => 45,
                'precioProducto' => 6500,
                'fotoProducto' => 'quitamanchas.jpg',
                'categoria' => 1
            ],

            [
                'nombreProducto' => 'Lomo de res',
                'cantidadProducto' => 30,
                'precioProducto' => 17000,
                'fotoProducto' => 'lomores.jpg',
                'categoria' => 2
            ],

            [
                'nombreProducto' => 'Chicarrón',
                'cantidadProducto' => 34,
                'precioProducto' => 20000,
                'fotoProducto' => 'chicharron.jpg',
                'categoria' => 2
            ]
        ];
        DB::table('producto')->insert($productos);
    }
}
