<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientes = [
            [
                'nombreCliente' => 'Yuri López',
                'cedulaCliente' => '1017165765',
                'direccionCliente' => 'Manrique Guadalupe',
                'telefonoCliente' => '3217134347',
                'generoCliente' => 'F',
                'fotoCliente' => 'yuri.jpg'
            ],
            

            [
                'nombreCliente' => 'Fabián Cardona',
                'cedulaCliente' => '102738219',
                'direccionCliente' => 'Aranjuez',
                'telefonoCliente' => '2437834347',
                'generoCliente' => 'M',
                'fotoCliente' => 'fabian.jpg'
            ],
        

            [
                'nombreCliente' => 'Gloria Castañeda',
                'cedulaCliente' => '1017165123',
                'direccionCliente' => 'La finquita',
                'telefonoCliente' => '3217124387',
                'generoCliente' => 'M',
                'fotoCliente' => 'gloria.jpg'
            ],
        
            [
                'nombreCliente' => 'Alexander Cardona',
                'cedulaCliente' => '1278465765',
                'direccionCliente' => 'Manrique Guadalupe',
                'telefonoCliente' => '3125703995',
                'generoCliente' => 'M',
                'fotoCliente' => 'alex.jpg'
            ],
       
            [
                'nombreCliente' => 'Deissi Alvarez',
                'cedulaCliente' => '1017164387',
                'direccionCliente' => 'Poblado',
                'telefonoCliente' => '3217132345',
                'generoCliente' => 'F',
                'fotoCliente' => 'deissi.jpg'
            ],

            [
                'nombreCliente' => 'Yuleicy Castaño',
                'cedulaCliente' => '1028073498',
                'direccionCliente' => 'Manrique Guadalupe',
                'telefonoCliente' => '3450981128',
                'generoCliente' => 'F',
                'fotoCliente' => 'yule.jpg'
            ]
        ];

        DB::table('cliente')->insert($clientes);
        
    }
}
