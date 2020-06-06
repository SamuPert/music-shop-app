<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoriaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->increments('id_categoria');
            $table->string('nome_categoria',30);
            $table->string('descrizione_categoria',50);
            $table->string('percorso_foto',255)->nullable(); // path_image
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
        Schema::dropIfExists('categoria');
    }
}
