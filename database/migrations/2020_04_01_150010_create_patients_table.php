<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('medical_insurance_id');
            $table->foreign('medical_insurance_id')->references('id')->on('medical_insurance');

            $table->boolean('account_holder');
            $table->integer('membership_number');
            $table->string('adress');
            $table->string('province'); 
            $table->integer('phone_number');            
            $table->timestamps();
        
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
