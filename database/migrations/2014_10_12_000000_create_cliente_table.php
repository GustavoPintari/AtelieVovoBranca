<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
 
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf', 14)->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telefone', 14);
            $table->date('nascimento');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
