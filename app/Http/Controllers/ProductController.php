<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Employee;
use App\Models\ProductModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    public function saved(ProductRequest $request)
    {
        $data = $request->only('product_ID', 'product_name','product_type','Manufactring_date','product_company','expiry_date');
        $data['expiry_date'] = Carbon::parse($data['expiry_date']);
        $data['Manufactring_date'] = Carbon::parse($data['Manufactring_date']);

        ProductModel::create($data);
        return response()->json(['data' => 'created'], 200);
    }
    public function show()
    {
        $data=ProductModel::all();
        return response()->json(['data' => $data], 200);
    }

}
