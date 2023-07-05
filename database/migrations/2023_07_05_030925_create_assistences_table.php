<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistences', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->bigInteger('shiftdetail_id')->unsigned(); #foreign key
            $table->date('date');
            $table->boolean('is_in_vacations');
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
        Schema::dropIfExists('assistences');
    }
}
