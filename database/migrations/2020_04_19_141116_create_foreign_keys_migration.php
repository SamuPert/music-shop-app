<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categoria_sottocategoria', function (Blueprint $table) {
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
            $table->foreign('id_sotto_categoria')->references('id_sotto_categoria')->on('sotto_categoria');
        });

        Schema::table('prodotto_sottocategoria', function (Blueprint $table) {
            $table->foreign('id_prodotto')->references('id_prodotto')->on('prodotto');
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
        //
    }
}
