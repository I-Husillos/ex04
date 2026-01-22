<?php

namespace Database\Seeders;

use App\Models\Prenda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prenda::create([
            'nombre' => 'Camiseta',
            'descripcion' => 'Camiseta de algodón',
            'precio' => 19.99,
        ]);

        Prenda::create([
            'nombre' => 'Pantalón',
            'descripcion' => 'Pantales chinos',
            'precio' => 29.99,
        ]);

        Prenda::create([
            'nombre' => 'Zapatos',
            'descripcion' => 'Zapatos de cuero',
            'precio' => 59.99,
        ]);
    }
}
