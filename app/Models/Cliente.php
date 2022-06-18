<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cliente extends Authenticatable
{
    use Notifiable;

    protected $table = 'cliente';

    protected $fillable = [
        'nome', 'sobrenome', 'cpf', 'email', 'celular', 
        'telefone', 'nascimento', 'password', 'endereco_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id', 'id');
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'pedido_id', 'id');
    }

    public function favoritos()
    {
        return $this->belongsToMany(
            Produto::class, 'favorito', 'cliente_id', 'produto_id'
        );
    }
}
