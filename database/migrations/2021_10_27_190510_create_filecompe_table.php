<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilecompeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filecompe', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('file_path')->nullable(false);
            $table->foreignId('comperegis_id')->nullable(false)->constrained('comperegis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('filecompe_comperegis_id_foreign');
        Schema::dropIfExists('filecompe');
    }
}
