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
        DB::collection('produtos')->insert(['nome' => 'Gelareira', 'descricao' => 'Side by Side com gelo na porta', 'valor' => '400', 'quantidade' => '1', 'tamanho' => '420 litros']);
        DB::collection('produtos')->insert(['nome' => 'Fogão', 'descricao' => 'Painel automático e forne elétrico', 'valor' => '300', 'quantidade' => '2', 'tamanho' => '6 bocas']);
        DB::collection('produtos')->insert(['nome' => 'Microondas', 'descricao' => 'Manda SMS quando termina de esquentar', 'valor' => '200', 'quantidade' => '1', 'tamanho' => '30 litros']);
        DB::collection('produtos')->insert(['nome' => 'Televisão', 'descricao' => '4K ILS', 'valor' => '4000', 'quantidade' => '2', 'tamanho' => '49 polegadas']);
        DB::collection('produtos')->insert(['nome' => 'Ipad', 'descricao' => 'Um Ipad muito bonito', 'valor' => '400', 'quantidade' => '10', 'tamanho' => '30cm x 25cm']);
    }
}
