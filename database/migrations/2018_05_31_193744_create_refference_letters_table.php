<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefferenceLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refference_letters', function (Blueprint $table) {
            $table->increments('letter_id');
            $table->integer('doctor_id')->unsigned();
            $table->integer('pacient_id')->unsigned();
            $table->integer('intervention_id')->unsigned();
            $table->integer('unit_id')->unsigned();
            $table->string('diagnostic');
            $table->string('medicine');
            $table->date('date');
            $table->timestamps();
            $table->foreign('pacient_id')->references('id')->on('users');
            $table->foreign('doctor_id')->references('id')->on('users');
            $table->foreign('unit_id')->references('unit_id')->on('medical_units');
            $table->foreign('intervention_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refference_letters');
    }
}
