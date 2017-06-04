<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('name');
            $table->uuid('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->integer('students');
            $table->integer('professor');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
