<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoComida;

class TipoComidaSeeder extends Seeder
{
    public function run(): void
    {
        TipoComida::insert([
            ['nombre_categoria' => 'Bebidas'],
            ['nombre_categoria' => 'Postres'],
            ['nombre_categoria' => 'Platillos Fuertes'],
            ['nombre_categoria' => 'Entradas'],
            ['nombre_categoria' => 'Sopas'],
        ]);
    }
}