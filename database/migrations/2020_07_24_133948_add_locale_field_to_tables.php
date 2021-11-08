<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocaleFieldToTables extends Migration
{
    protected $tables = [
        'terms',
        'products',
        'attributes',
        'values',
        'sales',
        'pages',
        'news',
        'orders',
        'forms',
        'menu_items',
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach ($this->tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->string('locale')->nullable();
            });
        }
        Schema::table('url_aliases', function (Blueprint $table) {
            $table->dropUnique('url_aliases_model_type_model_id_unique');
            $table->dropUnique('url_aliases_alias_unique');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropUnique('products_sku_unique');
            $table->index(['sku', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('url_aliases', function (Blueprint $table) {
            $table->unique('alias');
            $table->unique('url_aliases_model_type_model_id_unique');
        });
        foreach ($this->tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->dropColumn('locale');
            });
        }
    }
}
