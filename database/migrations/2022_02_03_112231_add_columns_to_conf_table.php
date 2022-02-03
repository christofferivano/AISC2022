<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToConfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('conf', function (Blueprint $table) {
            //
            $table->string("membership")->nullable(false);
            $table->string("renew_membership")->nullable(true);
            $table->string("contact_email_address")->nullable(true);
            $table->string("graduation_date")->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('conf', function (Blueprint $table) {
            //
            $table->dropColumn('membership');
            $table->dropColumn('renew_membership');
            $table->dropColumn('contact_email_address');
            $table->dropColumn('graduation_date');
        });
    }
}
