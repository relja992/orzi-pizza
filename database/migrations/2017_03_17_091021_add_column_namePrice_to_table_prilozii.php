<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnNamePriceToTablePrilozii extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prilozi', function (Blueprint $table) {
            $table->string('namePrice')->nullable()->after('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prilozi', function (Blueprint $table) {
            $table->dropColumn('namePrice');
        });
    }
}
