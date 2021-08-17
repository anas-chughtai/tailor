<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('staff_id');
            $table->date('salary_date');
            $table->string('salary_month');
            $table->string('salary_week');
            $table->integer('salary_paid');
            $table->timestamps();
        });
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE salaries AUTO_INCREMENT = 100001;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}
