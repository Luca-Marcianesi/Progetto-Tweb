<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PeriodoDiLocazione extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo_di_locazione', function (Blueprint $table) {
            $table->date('dat_inizio');
            $table->date('data_fine');
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
        Schema::dropIfExists('periodo_di_locazione');
    }
}
