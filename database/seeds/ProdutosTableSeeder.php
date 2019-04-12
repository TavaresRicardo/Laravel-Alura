<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB::collection('users')->delete();
        DB::collection('produtos')->insert(['nome' => 'Gelareira', 'descricao' => 'Side by Side com gelo na porta']);
        DB::collection('produtos')->insert(['nome' => 'Fogão', 'descricao' => 'Painel automático e forne elétrico']);
        DB::collection('produtos')->insert(['nome' => 'Microondas', 'descricao' => 'Manda SMS quando termina de esquentar']);
        DB::collection('produtos')->insert(['nome' => 'Televisão', 'descricao' => '4K ILS']);
    }
}
