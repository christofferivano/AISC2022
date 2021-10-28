<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComperegisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comperegis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jenis')->nullable(false);
            $table->string('nama_tim')->nullable(false);
            $table->integer('total_pembayaran')->nullable(false)->default(0);
            $table->integer('validation')->nullable(false)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comperegis');
    }
}
