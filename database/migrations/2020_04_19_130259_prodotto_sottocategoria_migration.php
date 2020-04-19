<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProdottoSottocategoriaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodotto_sottocategoria', function (Blueprint $table) {
            $table->id('id_prodotto',11);
            $table->id('id_sotto_categoria',11);
            $table->foreign('id_prodotto')->references('id_prodotto')->on('prodotto');
            $table->foreign('id_sotto_categoria')->references('id_sotto_categoria')->on('sotto_categoria');
            $table->primary('id_sotto_categoria');
            $table->primary('id_prodotto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodotto_sottocategoria');
    }
}
