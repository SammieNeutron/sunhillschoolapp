<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['firstname','middlename','lastname','dob','gender','blood_group','nationality','category','religion','telephone','email','address','lga','state','country','class','batch','admission_number','student_photo'];
}
