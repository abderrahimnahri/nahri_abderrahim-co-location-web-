<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            
          





            $table->id();
            $table->String('adresse')->nullable();
            $table->String('description')->nullable();
            $table->integer("superficie")->unsigned()->nullable();
            $table->integer('prix')->unsigned()->nullable();
            $table->integer('capacite')->unsigned()->nullable();         
            $table->String('telephone')->nullable();
            $table->double('lat', 15, 8)->nullable();
           $table->double('lng', 15, 8)->nullable();   
           $table->string('image')->nullable();
            $table->integer("user_id")->unsigned()->nullable();
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
        Schema::dropIfExists('offres');
    }
}
