<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use function Psr\Log\alert;
class EmployeeController extends Controller
{
    public function search()
    {
        $data = Employee::all();
        return response()->json(['data' => $data], 200);
    }

    public function create(Request $request)
    {
        $data = $request->only('email', 'password');
        Employee::create($data);
        return response()->json(['data' => 'created'], 200);
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return response()->json(['data' => 'deleted'], 200);
    }

}
