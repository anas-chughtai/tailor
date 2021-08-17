<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('reg_no')->nullable();
            $table->date('delivery_date');
            $table->integer('order_amount');
            $table->integer('order_paid');
            $table->string('order_status');
            $table->text('order_details');
            $table->integer('order_delete')->default(0);
            $table->timestamps();
        });
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE orders AUTO_INCREMENT = 10001;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
