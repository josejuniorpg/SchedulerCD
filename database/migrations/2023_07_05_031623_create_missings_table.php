<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('assistence_id')->unsigned();
            $table->boolean('status');
            $table->boolean('isJustified');
            $table->string('reason');
            $table->bigInteger('missing_categories_id')->unsigned(); #foreign key
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
        Schema::dropIfExists('missings');
    }
}
