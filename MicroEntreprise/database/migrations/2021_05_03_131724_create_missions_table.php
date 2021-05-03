<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
          $table->uuid('id')->primary();
          $table->string('reference');
          $table->uuid('organisation_id');
          $table->string('title');
          $table->string('comment')->nullable();
          $table->integer('deposit');
          $table->date('ended_at');
          $table->timestamps();

          $table->foreign('organisation_id')->references('id')->on('organisations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missions');
    }
}
