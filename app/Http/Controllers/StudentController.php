<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\Student;

class StudentController extends Controller
{
    function index()
    {  
        echo "menampilkan data students";
    }
}
