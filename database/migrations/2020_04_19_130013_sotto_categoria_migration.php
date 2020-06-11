<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SottoCategoriaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sotto_categoria', function (Blueprint $table) {
            $table->increments('id_sotto_categoria');
            $table->string('nome_sotto_categoria',50);
            $table->string('percorso_foto',255)->nullable(); // path_image
            $table->unsignedBigInteger('id_categoria');
            //$table->foreign('id_categoria')->references('id_categoria')->on('categoria');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sotto_categoria');
    }
}
