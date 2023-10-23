<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->integer('filial_id');
            $table->integer('produto_id');
            $table->string('preco_venda', 20);
            $table->string('estoque_minimo', 50);
            $table->string('estoque_maximo', 50);
            $table->timestamps();
        });
        Schema::table('produtos', function(Blueprint $table) {
            $table->unsignedBigInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });
        Schema::table('filiais', function(Blueprint $table) {
            $table->unsignedBigInteger('filial_id');
            $table->foreign('filial_id')->references('id')->on('filiais');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produto_filiais');
    }
};
