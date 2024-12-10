<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('productos')->insert([
        ['nombre' => 'nombre 1', 'marca' => 'marca 1','cantidad' => 'cantidad 1',],
        
    ]);
}
}
