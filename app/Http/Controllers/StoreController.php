<?php

namespace App\Http\Controllers;

use App\Models\StoreModel;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function create(Request $request){
        $data = $request->only('First_name', 'Last_name','City','District','State','Country');
        Store::create($data);
        return response()->json(['data' => 'created'], 200);
    }
}
