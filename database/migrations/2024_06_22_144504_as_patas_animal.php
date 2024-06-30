<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        
        Schema::create('asPatasAnimal', function (Blueprint $table) {
            $table->id('CODIGO');
            $table->string('NOME_ANIMAL');
            $table->string('ESPECIE');
            $table->string('RACA');
            $table->string('IDADE');
            $table->string('DESCRICAO_ANIMAL');
            $table->string('LOCALIZACAO_ENCONTRO');
            $table->string('ESTADO_ANIMAL');
            $table->string('IMAGEM');
            $table->string('PESSOA_NOME');
            $table->string('PESSOA_EMAIL');
            $table->string('PESSOA_TELEFONE');
            $table->string('PESSOA_ENDERECO');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
       Schema::dropIfExists('asPatasAnimal');
    }
};
