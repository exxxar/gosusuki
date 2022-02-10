<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string("uuid")->unique();
            $table->string("full_name");
            $table->string("passport");
            $table->string("birthday");
            $table->string("snils")->nullable();
            $table->string("oms")->nullable();
            $table->string("international_passport")->nullable();
            $table->smallInteger("sex")->default(0);
            $table->string("unrz_number")->default('');
            $table->string("drug_name")->default('');
            $table->string("drug_creator")->default('');
            $table->string("drug_serial")->default('');
            $table->string("medical_organization")->default('');
            $table->string("cert_number")->default('');
            $table->dateTime("drug_creation_date");
            $table->string("disease_information")->nullable();
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
        Schema::dropIfExists('certificates');
    }
}
