<?php

namespace estoque;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Categoria extends Model
{
    //
    protected $connection = 'mongodb';
    protected $table = 'categorias'; //Necessário quando o nome da model é diferente da tabela

    use SoftDeletes;

    // Para deixar ele receber apenas esses campos:
    protected $fillable = [
        'nome'
    ];


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $dateFormat = 'd-m-Y H:i';

    protected $guarded = ['_id'];

    public function produtos(){
        // Aqui fala que uma categoria tem vários produtos
        return $this->hasMany('estoque\Produtos');
    }
}
