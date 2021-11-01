<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBcaPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_card')->nullable(false);
            $table->date('payment_date')->nullable(false);
            $table->string('filename')->nullable(false);
            $table->foreignId('comperegis_id')->nullable(false)->constrained('comperegis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment', function (Blueprint $table) {
            $table->dropForeign('payment_comperegis_id_foreign');
        });
        Schema::dropIfExists('payment');
    }
}
