<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Immagine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immagine', function (Blueprint $table) {
            $table->string('url',2500);
            $table->bigIncrements('offerta');            
            $table->foreign('offerta')->references('id')->on('offerta');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('immagine');
    }
}
