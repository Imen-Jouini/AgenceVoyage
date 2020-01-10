<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResevationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resevations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('Date_Arrive');
            $table->date('Date_Depart');
            $table->float('somme');
            $table->unsignedBigInteger('local_id');
            $table->foreign('local_id')->references('id')->on('locals');
            $table->integer('nbre_personne');
            $table->string('nom');
            $table->string('email');
            $table->integer('phone');


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
        Schema::dropIfExists('resevations');
    }
}
