<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalePromoCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_promo_codes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->boolean('active')->default(true);
            $table->integer('used_count')->default(0);
            $table->integer('used_limit')->default(1);
            $table->boolean('transferred')->default(false)->comment('Sent in the mailing list, transferred to the client, ...');
            $table->unsignedInteger('sale_id');
            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('CASCADE');
            //$table->timestamp('start_at')->nullable();
            //$table->timestamp('end_at')->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_promo_codes');
    }
}
