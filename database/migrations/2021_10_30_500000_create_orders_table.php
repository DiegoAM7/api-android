<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->double("total");
            $table->string("method_payment");
            $table->boolean("paid")->default(false);
            $table->boolean("delivered")->default(false);
            $table->string("guide_number");
            $table->double("transportation_cost");
            $table->string("payment_document");
            $table->date("date");
            $table->foreignId("address_id")->constrained("addresses");
            $table->foreignId("user_id")->constrained("users");
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
