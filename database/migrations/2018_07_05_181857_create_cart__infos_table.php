<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart__infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->integer('order_amount')->nullable();
            $table->string('order_info')->nullable();
            $table->string('received_info')->nullable();
            $table->string('verification_no')->nullable();
            $table->integer('total_price')->nullable();
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
        Schema::dropIfExists('cart__infos');
    }
}
