<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTotalPembayaranToComperegisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comperegis', function (Blueprint $table) {
            $table->float('total_pembayaran')->nullable(false)->change();
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
            $table->integer('total_pembayaran')->nullable(false)->change();
        });
    }
}
