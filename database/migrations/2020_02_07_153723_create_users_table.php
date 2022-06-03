<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('sesso',10);
            $table->date('data_nascita');
            $table->text('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username',20);
            $table->string('password');
            $table->string('descrizione');
            $table->string('fotoprofilo')->nullable();
            $table->string('role',10)->default('user');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
