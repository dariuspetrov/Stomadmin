<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_prescriptions', function (Blueprint $table) {
            $table->integer('pacient_id')->unsigned();
            $table->integer('medicine_id')->unsigned();
            $table->timestamps();
            $table->foreign('pacient_id')->references('id')->on('users');
            $table->foreign('medicine_id')->references('medicine_id')->on('medicines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicine_prescriptions');
    }
}
