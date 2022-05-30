<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';

    protected $fillable = [
        'nome', 'categoria_id', 'descricao',
        'imagem', 'visivel', 'valor', 'qtd_estoque'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }

}
