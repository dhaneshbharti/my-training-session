<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function Sample()
    {
        return Inertia::render('Sample');
    }

    public function View()
    {
        return Inertia::render('View');
    }

    public function Create()
    {
        return Inertia::render('Create');
    }

    public function edit()
    {
        return Inertia::render('edit');
    }
    public function usershow()
    {
        return Inertia::render('User/show');
    }
    public function userdhanesh()
    {
        return Inertia::render('User/dhanesh');
    }
    public function rose()
    {
        return Inertia::render('rose');
    }

    public function userCreate()
    {
        return Inertia::render('User/Create');
    }
    public function userList()
    {
        return Inertia::render('User/List');
    }

    public function userEdit($id){
        $data = Student::where('id', $id)->first();
        return Inertia::render('User/Edit', ['page' => $data]);
    }


    public function userupdate($id)
    {
        $data = employee::where('id', $id)->first();
        return Inertia::render('User/Edit', ['page' => $data]);
    }
    public  function adddata(request $req)
      {

      }

    public function delete()
    {
        return Inertia::render('User/show');
    }

}
