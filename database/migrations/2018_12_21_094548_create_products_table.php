<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('sku')->unique();
            $table->integer('availability')->default(1)->comment('Наличие товара в магазине');
            $table->integer('price')->default(0);
            $table->integer('price_old')->default(0);
            $table->string('currency', 3)->nullable();
            $table->boolean('publish')->default(true)->comment('Статус публикации на фронте');
            $table->unsignedInteger('product_group_id')->nullable();
            $table->foreign('product_group_id')->references('id')->on('product_groups')->onDelete('CASCADE');
            $table->unsignedInteger('category_id')->nullable();
            $table->tinyInteger('type')->default(1)->comment('1 - product, 2 - collection, ...');
            $table->json('data')->nullable();
            $table->integer('rating')->default(0)->comment('Рейтинг товара. Вычисляется по нужным условиям, например в cron-задаче, по количеству успешных заказов');
            $table->timestamps();
        });

        // TODO Need to test
        //Schema::create('product_groups', function (Blueprint $table) {
        //    $table->foreign('default_product_id')->references('id')->on('products')->onDelete('CASCADE');
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::create('product_groups', function (Blueprint $table) {
        //    $table->dropForeign('default_product_id');
        //});

        Schema::dropIfExists('products');
    }
}
