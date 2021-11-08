<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saleables', function (Blueprint $table) {
            $table->unsignedInteger('sale_id');
            $table->unsignedInteger('model_id');
            $table->string('model_type');

            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saleables');
    }
}
