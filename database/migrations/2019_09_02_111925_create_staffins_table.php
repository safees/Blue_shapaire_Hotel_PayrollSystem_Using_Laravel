<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('staff_id');
            $table->date('date');
            $table->time('in_time');
            $table->timestamps();

            $table->foreign('staff_id')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffins');
    }
}
