<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoriaSottocategoriaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_sottocategoria', function (Blueprint $table) {
            $table->id('id_categoria',11);
            $table->id('id_sotto_categoria',11);
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
            $table->foreign('id_sotto_categoria')->references('id_sotto_categoria')->on('sotto_categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_sottocategoria');
    }
}
