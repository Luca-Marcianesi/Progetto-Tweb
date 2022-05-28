<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Appartamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartamento', function (Blueprint $table) {
            $table->bigIncrements('offerta');            
            $table->foreign('offerta')->references('id')->on('offerta');
            $table->tinyInteger('posti_letto_appartamento');
            $table->tinyInteger('numero_di_camere');
            $table->float('dimensioni');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appartamento');
    }
}
