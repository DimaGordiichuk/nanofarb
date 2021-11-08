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
            $table->string('number')->nullable();
            $table->string('status');
            $table->string('payment_status')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->json('data')->nullable(); // info about sales, discount,...
            $table->text('comment')->nullable();
            $table->tinyInteger('type')->default(1); // 1 - order, 2 - cart, ...
            $table->ipAddress('ip')->nullable();
            $table->timestamps();
            $table->timestamp('ordered_at')->nullable();
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
