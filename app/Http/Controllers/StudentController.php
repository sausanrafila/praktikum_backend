<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class StudentController extends Controller
{
    # membuat methode index
    public function index() #mendapatkan resource
    {  
        # menggunakan model student untuk select data
        $students = Student::all();
        $data = [
            'message' => 'get all students',
            'data' => $students
        ];
        #mengirim data (json) dan kode 200
        return response()->json($data, 200);
    }
    #membuat methode store
    public function store(Request $request) #menghapus resource
    {
        # menangkap data request
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];
        # menggunakan model student untuk insert data
        $student = student::create($input);
        $data = [
            'message' => 'Student is created succesfully',
            'data' => $student,
        ];
        #mengembalikan data (json) dengan kode 201
        return response()->json($data, 201);

    }
    #membuat methode show
    public function show($id)
    {
        $student = student::find($id); #menerima parameter id dari endpoint agar idnya di tangkap
        echo $student; 

        if ($student) {
            $data = [
                'message'=>'Get detail student',
                'data'=>$student
            ];
            return response()->json($data, 200);
        }
        else {
            $data = [
                'message'=>'Data not found',
            ];
            return response()->json($data, 404);            
        }        
    }
    #membuat methode function
    public function update(request $request, $id) #ketika ingin mengupdate ada id dan request yang di tangkap
    {
        #cara update data
        #cari data yang ingin di update apakah ada atau tida
        #jika ada maka update datanya
        #jika tidak munculkan pesan

        $student = student::find($id);

        if ($student) {
            $input = [
                'nama'=>$request->nama ?? $student->nama, #kalo seandainya data nama tidak dikirim maka gunakan nama di student
                'nim'=>$request->nim ?? $student->nim,
                'email'=>$request->email ?? $student->email, 
                'jurusan'=>$request->jurusan ?? $student->jurusan,
            ];
            $student->update($input);
            $data =[
                'message'=>'Data is update',
                'data'=> $student
            ];
            return response()->json($data, 200);
        }
        else{
            $data = [
                'message'=>'Data not found',
            ];
            return response()->json($data, 400);
        }
    } 
    #mlatihan destroy
    public function destroy($id){
        $student = student::find($id);
        if ($student) {
            $student ->delete();

            $data = [
                'message' => 'Data is deleted'
            ];
            return response()->json($data, 200);
        }
        else {
            $data = [
                'message' => 'Data not found'
            ];
            return response()->json($data, 404);
        }
    }
    
}
