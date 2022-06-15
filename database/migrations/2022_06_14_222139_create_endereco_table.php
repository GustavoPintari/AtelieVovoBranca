<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoTable extends Migration
{
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->id();
            $table->string('cep', 9);
            $table->string('rua', 60);
            $table->string('bairro', 60);
            $table->integer('numero');
            $table->string('complemento')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('endereco');
    }
}
