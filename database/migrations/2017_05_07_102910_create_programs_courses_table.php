<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsCoursesTable extends Migration
{
    
    public function up()
    {
        Schema::create('programs_courses', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('program_id');
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->uuid('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->enum('type', ['M', 'O']);
            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('programs_courses');
    }
}
