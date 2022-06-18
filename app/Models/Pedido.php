<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';

    protected $fillable = [
        'total', 'cliente_id', 'status_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }

    public function pedido()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function produtos()
    {
        return $this->belongsToMany(
            Produto::class, 'detalhe_pedido', 'pedido_id' , 'produto_id'
        );
    }
}