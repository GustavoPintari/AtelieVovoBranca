<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoTable extends Migration
{
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 60);
            $table->text('descricao');
            $table->string('imagem', 15);
            $table->boolean('visivel');
            $table->double('valor', 8, 2);
            $table->integer('qtd_estoque');

            $table->foreignId('categoria_id')->constrained('categoria')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produto');
       
    }
}
