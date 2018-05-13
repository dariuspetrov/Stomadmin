<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('intervention_id');
            $table->integer('pacient_id')->unsigned();
            $table->integer('intervention_type')->unsigned();
            $table->timestamps();
            $table->foreign('pacient_id')->references('id')->on('users');
            $table->foreign('intervention_type')->references('intervention_id')->on('intervention_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interventions');
    }
}
