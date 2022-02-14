<?php

namespace App\Http\Controllers;

use App\Models\Accessories;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
  public function accessories(){
 $data=Accessories::all();
 return response()->json(['data' => $data]);
}
}
