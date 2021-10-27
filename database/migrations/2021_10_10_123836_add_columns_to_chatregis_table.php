<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToChatregisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chatregis', function (Blueprint $table) {
            $table->integer('total_price')->default(13000);
            $table->string('referral_code');
            $table->foreign('referral_code')->references('referral_code')->on('referall');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chatregis', function (Blueprint $table) {
            $table->dropColumn('total_price');
            $table->dropForeign('chatregis_referral_code_foreign');
            $table->dropColumn('referral_code');
        });
    }
}
