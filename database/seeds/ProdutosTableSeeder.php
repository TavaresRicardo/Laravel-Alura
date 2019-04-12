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
        DB::collection('produtos')->insert(['nome' => 'Gelareira', 'descricao' => 'Side by Side com gelo na porta', 'valor' => '400', 'quantidade' => '1']);
        DB::collection('produtos')->insert(['nome' => 'Fogão', 'descricao' => 'Painel automático e forne elétrico', 'valor' => '300', 'quantidade' => '2']);
        DB::collection('produtos')->insert(['nome' => 'Microondas', 'descricao' => 'Manda SMS quando termina de esquentar', 'valor' => '200', 'quantidade' => '1']);
        DB::collection('produtos')->insert(['nome' => 'Televisão', 'descricao' => '4K ILS', 'valor' => '4000', 'quantidade' => '2']);
    }
}
