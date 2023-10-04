<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teste_dois_singulars', function (Blueprint $table) {
            $table->id();
            // string limite de 255
            $table->string('assunto');
            // pode ser passado de forma dinamica
            $table->enum('status', ['ativo', 'em analise', 'finalizado']);
            // text tem maiores limites
            $table->text('descricao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teste_dois_singulars');
    }
};
