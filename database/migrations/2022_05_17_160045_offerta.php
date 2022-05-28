<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Offerta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offerta', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('stato',25);
            $table->string('titolo',50);
            $table->char('descrizione_breve',200);
            $table->string('città',25);
            $table->string('locazione',50);
            $table->integer('prezzo');
            $table->string('tipo',60);
            $table->string('genere',1);
            $table->text('descrizione',450);
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offerta');
    }
}
