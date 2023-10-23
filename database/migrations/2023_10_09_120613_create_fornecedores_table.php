<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('site', 50);
            $table->string('uf', 50);
            $table->string('email', 50);
            $table->timestamps();
        });
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
  
        Schema::table('fornecedores', function(Blueprint $table) {
  
            $table->dropColumn('site');
        });
        Schema::dropIfExists('fornecedores');
    }
};
