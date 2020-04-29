<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('enrollment');

            $table->string('name');
            $table->string('lastname')->nullable();
            $table->bigInteger('phone_number');  

            $table->unsignedBigInteger('specialties_id');
            $table->foreign('specialties_id')->references('id')->on('specialties');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('professionals');
    }
}
