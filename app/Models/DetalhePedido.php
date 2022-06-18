<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalhePedido extends Model
{
    protected $table = 'detalhe_pedido';

    protected $fillable = [
        'quantidade', 'subtotal',
        'pedido_id', 'produto_id',
    ];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id', 'id');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produto_id', 'id');
    }
}