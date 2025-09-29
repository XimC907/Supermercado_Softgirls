<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facturas = [
            [
                'fecha_factura' => '10/06/2025',
                'total' => 150000,
                'cliente' => 4,
            ],

            [
                'fecha_factura' => '09/05/2024',
                'total' => 200000,
                'cliente' => 3,  
            ],

            [
                'fecha_factura' => '25/03/2025',
                'total' => 95000,
                'cliente' => 1,
            ]
        ];

        DB::table('factura')->insert($facturas);
    }
}
