<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conf_file', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('filename')->nullable(false);
            $table->string('filepath')->nullable(false);
            $table->foreignId('conference_id')->nullable(false)->constrained('conf')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('conf_file', function (Blueprint $table) {
            $table->dropForeign('conf_file_conference_id_foreign');
        });
        Schema::dropIfExists('conf_file');
    }
}
