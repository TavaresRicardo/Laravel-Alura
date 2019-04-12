<?php

namespace estoque;

//use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

//use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Produtos extends Model {

    protected $connection = 'mongodb';
    protected $table = 'produtos'; //Necessário quando o nome da model é diferente da tabela

    use SoftDeletes;

    // Para deixar ele receber apenas esses campos:
    protected $fillable = [
        'nome',
        'valor',
        'descricao',
        'quantidade'
    ];


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $dateFormat = 'd-m-Y H:i';

//    Para desativar as informações de tempo:
//    public $timestamps = false;






}
