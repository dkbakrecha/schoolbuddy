<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicEnquries extends Model
{
    protected $fillable = [
        'student_name',
        'student_gender',
        'student_dob',
        'class_id',
        'current_institute',
        'enquiry_source', 'father_name', 'mother_name', 'email', 'contact_number', 'Remark'
    ];
}
