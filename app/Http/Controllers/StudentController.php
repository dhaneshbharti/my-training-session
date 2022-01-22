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

    public function update(Request $request){
        $student = Student::where('id', $request->id)->first();
        $data = $request->only('roll_number', 'student_name','father_name','class','address','phone_no','gender');
        $student->update($data);
        return response()->json(['data' => 'updated'], 200);
    }
    public function destroy($id)
    {
        $employee = Student::find($id);
        $employee->delete();
        return response()->json(['data' => 'deleted'], 200);
    }
}
