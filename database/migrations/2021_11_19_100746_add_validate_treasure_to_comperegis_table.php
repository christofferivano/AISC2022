<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddValidateTreasureToComperegisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comperegis', function (Blueprint $table) {
            $table->integer('validate_treasure')->nullable(False)->default(0);
            $table->integer('validate_email')->nullable(False)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comperegis', function (Blueprint $table) {
            $table->dropColumn('validate_treasure');
            $table->dropColumn('validate_email');
        });
    }
}
