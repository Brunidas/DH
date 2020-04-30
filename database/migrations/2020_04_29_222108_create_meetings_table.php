<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('date');

            $table->unsignedBigInteger('professionals_id');
            $table->foreign('professionals_id')->references('id')->on('professionals');

            $table->unsignedBigInteger('patients_id');
            $table->foreign('patients_id')->references('id')->on('patients');

            $table->unsignedBigInteger('dates_id');
            $table->foreign('dates_id')->references('id')->on('dates');

            $table->unsignedBigInteger('hours_id');
            $table->foreign('hours_id')->references('id')->on('hours');

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
        Schema::dropIfExists('meetings');
    }
}
