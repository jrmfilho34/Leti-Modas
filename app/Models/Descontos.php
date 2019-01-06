<?php

namespace LetiModas\Models;

use Illuminate\Database\Eloquent\Model;

class Descontos extends Model
{
    protected $fillable = ['produtos_id','nome','desconto','validade','ativo'];
}
