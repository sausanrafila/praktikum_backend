<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function index()
    {  
        $students = Student::all();
        $data = [
            'message' => 'get all students',
            'data' => $students
        ];
        return response()->json($data, 200);
    }
    public function store(Request $request) 
    {
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];
        $student = student::create($input);
        $data = [
            'message' => 'Student is created succesfully',
            'data' => $student,
        ];
        return response()->json($data, 201);

    }
}
