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
        'quantidade',
        'tamanho',
        'categoria_id'
    ];


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $dateFormat = 'd-m-Y H:i';

    protected $guarded = ['_id'];

    public function categoria(){
        // Aqui fala que ele pertece a uma categoria
        return $this->belongsTo('estoque\Categoria');
    }

//    Para desativar as informações de tempo:
//    public $timestamps = false;






}
