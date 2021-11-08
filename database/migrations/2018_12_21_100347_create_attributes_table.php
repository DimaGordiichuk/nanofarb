<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('suffix')->nullable();
            $table->string('slug')->unique();
            $table->tinyInteger('data_type')->default(1)->comment('Type field for values attribute');
            $table->tinyInteger('purpose')->default(1)->comment('Purpose for attribute values: product card, products facet filter, all');
            $table->integer('weight')->default(0);
            $table->json('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes');
    }
}
