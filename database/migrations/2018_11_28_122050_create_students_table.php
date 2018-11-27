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
            $table->increments('id');
            $table->string('admission_id');
            
            $table->integer('class_id');
            
            $table->string('student_name');
            $table->integer('student_gender')
                    ->comment('0 = Male, 1 = Female');
        
            $table->date('student_dob');	
            $table->string('current_institute');
            
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('email');
            $table->string('contact_number', 10);
            
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
        Schema::dropIfExists('students');
    }
}
