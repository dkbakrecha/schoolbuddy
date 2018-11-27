<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicEnquiryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_enquries', function (Blueprint $table) {
            $table->increments('id');
            
            $table->date('enquiry_date');	
            $table->integer('enquiry_source')
                    ->default(0)
                    ->comment('0 = Office, 1 = Site, 2 = Other');
            
            $table->string('student_name');
            $table->integer('student_gender')
                    ->comment('0 = Male, 1 = Female');
            $table->date('student_dob');	
            $table->integer('class_id');	
            $table->string('current_institute');
            
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('email');
            $table->string('contact_number', 10);
            
            $table->text('Remark');
            $table->integer('status')
                    ->default(1)
                    ->comment('1 = Open, 0 = Close, 2 = Complete, 3 = pending');
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
        Schema::dropIfExists('academic_enquries');
    }
}
