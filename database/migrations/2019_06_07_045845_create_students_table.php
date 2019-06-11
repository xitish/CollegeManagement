<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('rollyear');
            $table->string('rollfaculty')->references('short_name')->on('departments');
            $table->string('rollno');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('citizen');
            $table->date('date_of_birth');
            $table->string('photo')->default('images/dummy.jpg');
            $table->string('remarks')->nullable();
            $table->timestamps();
            $table->unique(['rollyear','rollfaculty','rollno']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
