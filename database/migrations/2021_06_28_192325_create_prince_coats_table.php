<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrinceCoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prince_coats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cus_name')->nullable();
            $table->string('length')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('arm')->nullable();
            $table->string('cuff')->nullable();
            $table->string('chest')->nullable();
            $table->string('belly')->nullable();
            $table->string('hip')->nullable();
            $table->string('ban')->nullable();
            $table->string('half')->nullable();
            $table->string('cross')->nullable();
            $table->string('front_style')->nullable();
            $table->text('details')->nullable();

            $table->string('p_waist')->nullable();
            $table->string('p_length')->nullable();
            $table->string('p_hip')->nullable();
            $table->string('p_bottom')->nullable();
            $table->string('p_knee')->nullable();
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
        Schema::dropIfExists('prince_coats');
    }
}
