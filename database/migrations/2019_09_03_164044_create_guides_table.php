<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Address1');
            $table->string('Address2');
            $table->string('City');
            $table->string('Tele');
            $table->string('Alt_Tele');
            $table->time('NIC');
            $table->string('Pro')->nullable();
            $table->string('Email');
            $table->string('password');
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
        Schema::dropIfExists('guides');
    }
}
