<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detalles = [
            [
                'factura' => 2,
                'producto' => 3,
                'cantidad' => 6,
                'precio' => 12000
            ],

            [
                'factura' => 1,
                'producto' => 2,
                'cantidad' => 1,
                'precio' => 3500,
            ],

            [
                'factura' => 3,
                'producto' => 1,
                'cantidad' => 2,
                'precio' => 30000,
            ]
        ];

        DB::table('detalle')->insert($detalles);
    }
}
