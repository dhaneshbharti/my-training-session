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

}
