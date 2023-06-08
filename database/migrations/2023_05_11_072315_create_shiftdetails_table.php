<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shiftdetails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('shift_id')->unsigned(); #foreign key
            $table->bigInteger('scheduler_id')->unsigned(); #foreign key
            $table->bigInteger('matter_id')->unsigned(); #foreign key
            $table->bigInteger('classmate_id')->unsigned(); # foreign key
            $table->string('notes');
            $table->string('modality');
            $table->string('status');
            $table->string('group');
            $table->string('day');
            $table->timestamps();
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shiftdetails');
    }
}
