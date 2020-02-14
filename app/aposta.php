<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aposta extends Model
{
    protected $table   = 'aposta';
    protected $fillable = [
        'nome', 'email', 'cep', 'estado', 'cidade', 'rua','numero', 'aposta'
    ];
}
