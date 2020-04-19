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
            $table->unsignedBigInteger('id_prodotto')->unsigned()->index();
            $table->unsignedBigInteger('id_sotto_categoria')->unsigned()->index();
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
