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
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->string('billing_name');
            $table->string('billing_email');
            $table->string('billing_country');
            $table->string('billing_city');
            $table->string('billing_address');
            $table->string('billing_postal_code');
            $table->string('billing_phone');
            $table->string('billing_name_on_card');
            $table->decimal('billing_discount', 8, 2)->default(0);
            $table->string('billing_discount_code')->nullable();
            $table->decimal('billing_subtotal', 8, 2);
            $table->decimal('billing_tax', 8, 2);
            $table->decimal('billing_total', 8, 2);
            $table->string('payment_gateway')->default('stripe');
            $table->boolean('shipped')->default(false);
            $table->string('error')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
