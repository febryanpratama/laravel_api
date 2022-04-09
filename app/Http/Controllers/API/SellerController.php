<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SellerController extends Controller
{
    //
    public function getAllSellerOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'seller_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 401,'messages'=>'error', 'data' => $validator->errors()]);
        }
        $data = transaction::where('seller_id', $request->seller_id)->get();

        return response()->json(['code' => 201, 'messages' => 'success', 'data' => $data]);
    }

    public function confirmSeller(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'transaction_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 401,'messages'=>'error', 'data' => $validator->errors()]);
        }
        // dd($request->all());
        $data = transaction::find($request->transaction_id)->update(['status' => 'confirmed']);
        
        return response()->json(['code' => 201,'messages'=>'success', 'data' => 'Successfully Confirm Order']);
    }
}
