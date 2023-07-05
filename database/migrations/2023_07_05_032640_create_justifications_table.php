<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJustificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('justifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('missings_id')->unsigned();
            $table->boolean('justified')->default(false);
            $table->string('justification_path');
            $table->string('justification_reason');
            $table->bigInteger('justitication_categori_id');
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
        Schema::dropIfExists('justifications');
    }
}
