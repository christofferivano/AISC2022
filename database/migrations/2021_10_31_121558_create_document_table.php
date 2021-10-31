<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('filename')->nullable(false);
            $table->string('filepath')->nullable(false);
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
        Schema::table('document', function (Blueprint $table) {
            $table->dropForeign('document_comperegis_id_foreign');
        });
        Schema::dropIfExists('document');
    }
}
