<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProdottoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodotto', function (Blueprint $table) {
            $table->id('id_prodotto');
            $table->string('nome_prodotto',75);
            $table->string('descrizione_breve',1500);
            $table->string('descrizione_estesa',1500);
            $table->string('percorso_foto',255)->nullable(); // path_image
            $table->float('prezzo',8,2);
            $table->float('sconto',8,2)->default(0);
            $table->unsignedBigInteger('id_sotto_categoria');
            // $table->foreign('id_sotto_categoria')->references('id_sotto_categoria')->on('sotto_categoria');
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
        Schema::dropIfExists('prodotto');
    }
}
