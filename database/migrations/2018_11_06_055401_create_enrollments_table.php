<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->unsignedInteger('program_id');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->unsignedInteger('exam_id');
            $table->foreign('exam_id')->references('id')->on('exams');  
            $table->unsignedInteger('session_id');
            $table->foreign('session_id')->references('id')->on('sessions');
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
        Schema::dropIfExists('enrollments');
    }
}