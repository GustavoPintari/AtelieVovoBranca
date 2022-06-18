<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id();
            $table->double('total', 8, 2);

            $table->foreignId('cliente_id')->constrained('cliente')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('status_id')->constrained('status')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedido');
    }
}
