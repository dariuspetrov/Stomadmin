<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consult_papers', function (Blueprint $table) {
            $table->increments('paper_id');
            $table->integer('doctor_id')->unsigned();
            $table->integer('pacient_id')->unsigned();
            $table->integer('diagnostic_id')->unsigned();
            $table->string('medicine');
            $table->date('date');
            $table->timestamps();
            $table->foreign('pacient_id')->references('id')->on('users');
            $table->foreign('doctor_id')->references('id')->on('users');
            $table->foreign('diagnostic_id')->references('diagnostic_id')->on('diagnostics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consult_papers');
    }
}
