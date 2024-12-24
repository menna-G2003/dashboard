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
        Schema::table('table_students', function (Blueprint $table) {
            $table->unsignedInteger('tablet_id')->nullable();
            $table->foreign('tablet_id')->references('tablet_id')->on('tablets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_students', function (Blueprint $table) {
            //
        });
    }
};
