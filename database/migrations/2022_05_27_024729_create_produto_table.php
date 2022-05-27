<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 60);
            $table->foreignId('categoria_id')->references('id')->on('categoria');
            $table->text('descricao');
            $table->string('imagem', 15);
            $table->boolean('visivel');
            $table->double('valor', 8, 2);
            $table->bigInteger('qtd_estoque');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto');
       
    }
}
