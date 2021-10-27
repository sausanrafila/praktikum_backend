<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;

    function getALLStudents() {
        //query select SQL
        $students = DB::select('select * from students');
        return $students;
    }
}
