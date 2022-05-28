<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VincoloDiEtà extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vincolo_eta', function (Blueprint $table) {
            $table->integer('eta_minima');
            $table->integer('eta_massima');
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
        Schema::dropIfExists('vincolo_eta');
    }
}
