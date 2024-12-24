<?php
//student table 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// //tablet table
// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::create('tablets', function (Blueprint $table) {
//             $table->unsignedInteger('tablet_id',true)->primary();
//             $table->string('tablet_name',30);
//             $table->unsignedInteger('std_id')->unique();
//             $table->foreign('std_id')->references('code')->on('students')->onDelete('cascade');
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::dropIfExists('tablets');
//     }
// };
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //create table in database 
    {
        Schema::create('students', function (Blueprint $table) {
            $table->unsignedInteger('code')->primary();
            $table->string('name',150);
            $table->string('email')->unique();
            $table->string('password')->unique();
            $table->string('subject',150);
            $table->char('phone',11)->nullable();
            $table->string('photo')->nullable();
            $table->unsignedTinyInteger('dept_id')->nullable();
            $table->foreign('dept_id')->references('department_num')->on('departments');
            // $table->foreignId('dept_id')->constrained('deparments','department_num');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //
    {
        Schema::dropIfExists('students');
    }
};
