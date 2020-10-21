<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicantids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Applicantid');
            $table->timestamps();

            $table->foreign('Applicantid')->references('id')->on('vacancies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicantids');
    }
}
