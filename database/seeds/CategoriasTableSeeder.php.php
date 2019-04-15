<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('categorias')->insert(['nome' => 'ELETRONICO']);
        DB::collection('categorias')->insert(['nome' => 'ELETRODOMESTICO']);
        DB::collection('categorias')->insert(['nome' => 'VEICULOS']);
        DB::collection('categorias')->insert(['nome' => 'UTENSILIOS']);

    }
}
