<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'endereco';

    protected $fillable = [
        'cep', 'rua', 'bairro', 'numero',
        'numero', 'complemento'
    ];

    public function clientes()
    {
        return $this->hasOne(Cliente::class, 'endereco_id', 'id');
    }


}