<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_courses', function (Blueprint $table) {
            $table->unsignedMediumInteger('id',true)->primary();
            $table->unsignedInteger('std_id');
            $table->unsignedMediumInteger('crs_id');
            $table->foreign('std_id')->references('code')->on('students');
            $table->foreign('crs_id')->references('course_id')->on('courses');
            $table->unsignedTinyInteger('degree')->nullable();
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
        Schema::dropIfExists('students_courses');
    }
};
