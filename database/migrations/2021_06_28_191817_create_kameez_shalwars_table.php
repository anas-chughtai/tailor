<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKameezShalwarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kameez_shalwars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('length')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('arm')->nullable();
            $table->string('cuff')->nullable();
            $table->string('collar_style')->nullable();
            $table->string('chest')->nullable();
            $table->string('belly')->nullable();
            $table->string('hip')->nullable();
            $table->string('front_style')->nullable();
            $table->string('s_length')->nullable();
            $table->string('s_bottom')->nullable();
            $table->string('s_ghara')->nullable();
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
        Schema::dropIfExists('kameez_shalwars');
    }
}
