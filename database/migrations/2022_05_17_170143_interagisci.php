<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Interagisci extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interagisce', function (Blueprint $table) {
            $table->integer('offerta');            
            $table->string('utente');
            $table->string('tipo_interazione',10);               
            $table->date('data');                        
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interagisce');
    }
}
