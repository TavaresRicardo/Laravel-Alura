<?php

use Illuminate\Support\Facades\Schema;
//use Illuminate\Database\Schema\Blueprint;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{

    //protected $connection = 'mongodb';
    public function up()
    {
        Schema::create('produtos', function($collection){
            $collection->index('nome');
            $collection->unique('descricao');
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
