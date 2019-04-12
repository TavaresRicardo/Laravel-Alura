<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaTamanhoNoProdutos extends Migration
{

    public function up()
    {
        Schema::collection('produtos', function($collection){
            $collection->string('tamanho', 100);
        });
    }

    public function down()
    {
        Schema::collection('produtos', function($collection){
            $collection->dropColumn('tamanho', 100);
        });
    }
}
