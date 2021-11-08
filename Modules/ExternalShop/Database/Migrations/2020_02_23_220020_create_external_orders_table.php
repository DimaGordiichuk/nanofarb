<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExternalOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('external_orders')) {
            Schema::create('external_orders', function (Blueprint $table) {
                $table->increments('id');
                $table->string('source');
                $table->string('external_id');

                $table->string('number')->nullable();
                $table->string('delivery_address')->nullable();
                $table->string('delivery_service')->nullable();
                $table->string('payment_info')->nullable();
                $table->integer('total_sum')->default(0);
                $table->string('client_comment')->nullable();
                $table->string('seller_comment')->nullable();
                $table->integer('status')->nullable();
                $table->timestamp('confirmed_at')->nullable();
                $table->timestamps();
                $table->json('client')->nullable();
                $table->json('purchases')->nullable();
                $table->json('raw')->nullable();

                $table->index(['source', 'external_id']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('external_orders');
    }
}
