<?php

namespace LetiModas\Models;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = ['user_id','produto_id','quantidade' ];
}
