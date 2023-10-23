<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();
            $table->string('comprimento', 10);
            $table->string('largura', 10);
            $table->string('altura', 50);
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('produto_detalhes');
    }
};
