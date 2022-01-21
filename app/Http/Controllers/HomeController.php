<?php

namespace App\Http\Controllers;

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

    public function userupdate()
    {
        return Inertia::render('userupdate');
    }
    public  function adddata(request $req)
      {

      }

      public function userAdd(Request$request){

      }
}
