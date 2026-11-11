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
        Schema::create('certificados', function (Blueprint $table) {
            $table->id();
            $table->foreignId("aluno_id")->constrained("alunos", "pessoa_id");
            $table->foreignId("curso_id")->constrained();
            $table->string("nome", 255);
            $table->string("descricao", 255);
            $table->string("url")->nullable();
            $table->string("status")->default("PENDENTE");
            $table->double("horas_validas")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificados');
    }
};
