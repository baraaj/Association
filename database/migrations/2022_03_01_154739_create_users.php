<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
    
                /* $table->id();
                 $table->string("nom");
                 $table->string("adresse") ;
                 $table->integer("tel");
                 $table->string("email");
                 $table->string("mdp");
                 $table->timestamps();*/
                 $table->id();
                 $table->string("username");
                 $table->string("f_name");
                 $table->string("l_name");
                 $table->string("email");
                 $table->integer("phone");
                 $table->string("password");
                 $table->string("address") ;
                 $table->integer("status") ;
                 $table->string("adress") ;
                
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
