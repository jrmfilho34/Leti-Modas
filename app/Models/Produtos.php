<?php

namespace LetiModas\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['categoria_id','titulo','descricao','quantidade','preco','custo','validade' ];
}
