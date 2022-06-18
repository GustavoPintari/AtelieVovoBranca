<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalhePedidoTable extends Migration
{
 
    public function up()
    {
        Schema::create('detalhe_pedido', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->double('subtotal', 8, 2);
            
            $table->foreignId('pedido_id')->constrained('pedido');
            $table->foreignId('produto_id')->constrained('produto');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalhe_pedido');
    }
}
