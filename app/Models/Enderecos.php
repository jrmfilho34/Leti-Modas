<?php

namespace LetiModas\Models;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    protected $fillable = ['user_id','entrega','cidade','bairro','rua','CEP','telefone','visitor' ];
}
