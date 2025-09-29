<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            [
                'nombreCategoria' => 'Cuidado del Hogar',
                'descripcion' => 'Productos para mantener limpio el hogar'
            ],

            [
                'nombreCategoria' => 'Carnes',
                'descripcion' => 'Res,cerdo, pescado, pollo, etc',
            ],
            
            [
                'nombreCategoria' => 'Lacteos',
                'descripcion' => 'Leche y sus derivados',
            ] 

        ];

         DB::table('categoria')->insert($categorias);
    }
}
