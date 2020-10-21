<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuideBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guide_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tour');
            $table->date('date');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('guide_id');
            $table->timestamps();
            
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('guide_id')->references('id')->on('guides')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guide_bookings');
    }
}
