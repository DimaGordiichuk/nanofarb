<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('path')->nullable();
            $table->unsignedInteger('url_alias_id')->nullable();
            $table->string('target', 10)->nullable(); // _self
            $table->tinyInteger('path_type')->default(1);

            $table->integer('weight')->default(0);
            $table->unsignedInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('CASCADE');

            $table->json('data')->nullable();

            $table->unsignedInteger('_lft')->default(0);
            $table->unsignedInteger('_rgt')->default(0);
            $table->unsignedInteger('parent_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
}
