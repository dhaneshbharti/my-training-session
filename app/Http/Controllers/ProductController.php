<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Company;
use App\Models\CModel;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function destroy($id)
    {
        $employee = Product::find($id);
        $employee->delete();
        return response()->json(['data' => 'deleted'], 200);
    }

    public function save(Request $request)
    {
        $data = $request->only('product_name', 'product_type', 'manufacturing_date', 'product_company', 'expiry_date', 'product_model');
//           $data['expiry_date'] = Carbon::parse($data['expiry_date']);
//         $data['Manufactring_date'] = Carbon::parse($data['Manufactring_date']);

        $created=Product::create($data);
        $created->accessories()->attach(collect($request->accessories));
        return response()->json(['data' => 'created'], 200);

    }
    public function cmodel()
    {
        //
        $data =CModel::all();

        return response()->json(['data' => $data]);
    }
    public function comodel($id)
    {
        //
        return response()->json(['data' => Company::where('c_id', $id)->get()], 200);

    }

    public function show()
    {
        $data = Product::all();
        return response()->json(['data' => $data], 200);
    }
    public function Update(Request $request){
        $student = Product::where('id', $request->id)->first();
        $data = $request->only('product_name','product_type','manufacturing_date','product_company','expiry_date','product_model');
        $student->update($data);
        return response()->json(['data' => 'updated'], 200);
    }
    public function return()
     {

     }
}
