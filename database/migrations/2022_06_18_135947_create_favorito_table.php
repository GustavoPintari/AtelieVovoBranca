<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritoTable extends Migration
{
    public function up()
    {
        Schema::create('favorito', function (Blueprint $table) {
            $table->id();
            $table->integer('produto_id')->unsigned()->unique();

            $table->foreign('produto_id')->references('id')->on('produto');
            $table->foreignId('cliente_id')->constrained('cliente');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('favorito');
    }
}
