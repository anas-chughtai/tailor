<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaistCoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waist_coats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cus_name')->nullable();
            $table->string('length')->nullable();
            $table->string('neck')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('chest')->nullable();
            $table->string('belly')->nullable();
            $table->string('hip')->nullable();
            $table->text('design')->nullable();
            $table->string('front_style')->nullable();
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
        Schema::dropIfExists('waist_coats');
    }
}
