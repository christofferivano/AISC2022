<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jenis_voucher')->nullable(false);
            $table->foreignId('institution_id')->nullable(true)->constrained('institution')->onDelete('cascade');
            $table->integer('besar_potongan')->nullable(false);
            $table->string('kode_voucher')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('voucher', function (Blueprint $table) {
            $table->dropForeign('voucher_institution_id_foreign');
        });
        Schema::dropIfExists('voucher');
    }
}
