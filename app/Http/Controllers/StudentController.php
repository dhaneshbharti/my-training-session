<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function search(){
        $data = Student::all();
        return response()->json(['data' => $data], 200);
    }

    public function create(Request $request){
        $data = $request->only('roll_number', 'student_name','father_name','class','address','phone_no','gender');
        Student::create($data);
        return response()->json(['data' => 'created'], 200);
    }
}
