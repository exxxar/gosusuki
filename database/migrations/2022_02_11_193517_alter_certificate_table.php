<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table("certificates", function (Blueprint $table){
           $table->boolean("is_temporary")->default(true);
           $table->dateTime("payed_at")->nullable();
           $table->integer("live_time")->default(1);
           $table->string("inn")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
