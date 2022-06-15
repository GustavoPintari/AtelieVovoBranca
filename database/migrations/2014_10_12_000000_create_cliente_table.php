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
            $table->string('sobrenome');
            $table->string('cpf', 14)->unique();
            $table->date('nascimento');
            $table->string('email')->unique(); 
            $table->string('celular', 14);
            $table->string('telefone', 14)->nullable();
            $table->string('password');

            $table->foreignId('endereco_id')->constrained('endereco')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
