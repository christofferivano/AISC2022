<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama')->nullable(false);
            $table->string('institution')->nullable(false);
            $table->string('email')->nullable(true);
            $table->string('phone_number')->nullable(true);
            $table->string('jenis_member')->nullable(false);
            $table->integer('biaya_pendaftaran')->nullable(false);
            $table->foreignId('comperegis_id')->nullable(false)->constrained('comperegis')->onDelete('cascade');
            $table->foreignId('voucher_id')->nullable(true)->constrained('voucher')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('member_comperegis_id_foreign');
        $table->dropForeign('member_voucher_id_foreign');
        Schema::dropIfExists('member');
    }
}
