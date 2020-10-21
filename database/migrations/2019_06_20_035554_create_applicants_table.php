<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('vacancyid');
            $table->string('firstname');
            $table->string('lastname');  
            $table->string('nic');
            $table->string('email');
            $table->string('telephone');
            $table->mediumText('address');
            $table->string('workex');
            $table->timestamps();

            $table->foreign('vacancyid')->references('id')->on('applicantids')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
