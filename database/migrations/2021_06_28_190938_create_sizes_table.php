<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('kameez_shalwar_id')->nullable();
            $table->unsignedBigInteger('kameez_trouser_id')->nullable();
            $table->unsignedBigInteger('shirt_id')->nullable();
            $table->unsignedBigInteger('two_piece_id')->nullable();
            $table->unsignedBigInteger('three_piece_id')->nullable();
            $table->unsignedBigInteger('waist_coat_id')->nullable();
            $table->unsignedBigInteger('coat_id')->nullable();
            $table->unsignedBigInteger('sherwani_id')->nullable();
            $table->unsignedBigInteger('prince_coat_id')->nullable();
            $table->unsignedBigInteger('pant_id')->nullable();
            $table->unsignedBigInteger('safari_suite_id')->nullable();
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
        Schema::dropIfExists('sizes');
    }
}
