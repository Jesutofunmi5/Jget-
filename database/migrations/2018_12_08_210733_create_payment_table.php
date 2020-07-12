<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_id');
            $table->integer('item_id');
            $table->integer('session');
            $table->string('payment_type', 20);
            $table->decimal('total_cost', 15, 2);
            $table->integer('recipient_count');
            $table->tinyInteger('pay_status')->comment = "1 for Unverified & 2 for Verified";
            $table->string('paygate_status_code', 50)->nullable();
            $table->string('paygate_status_msg', 50)->nullable();
            $table->dateTime('order_date');
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
        Schema::drop('payment');
    }
}
