<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwoPiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('two_pieces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cus_name')->nullable();
            $table->string('length')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('arm')->nullable();
            $table->string('cuff')->nullable();
            $table->string('chest')->nullable();
            $table->string('belly')->nullable();
            $table->string('hip')->nullable();
            $table->string('half')->nullable();
            $table->string('cross')->nullable();
            $table->string('front_style')->nullable();
            $table->string('button_style')->nullable();

            $table->string('two_pcs_p_waist')->nullable();
            $table->string('two_pcs_p_length')->nullable();
            $table->string('two_pcs_p_hip')->nullable();
            $table->string('two_pcs_p_bottom')->nullable();
            $table->string('two_pcs_p_knee')->nullable();

            $table->text('details')->nullable();
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
        Schema::dropIfExists('two_pieces');
    }
}
