<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BuyerController extends Controller
{
    //
    public function getAllBuyerOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'buyer_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 401,'messages'=>'error', 'data' => $validator->errors()]);
        }
        // dd($request);

        $data = transaction::where('buyer_id', $request->buyer_id)->get();

        return response()->json(['code' => 201, 'messages' => 'success', 'data' => $data]);
    }
    public function getDetailBuyerOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'transaction_id' => 'required|numeric',
            'buyer_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 401,'messages'=>'error', 'data' => $validator->errors()]);
        }
        // dd($request);

        $data = transaction::with('detail_transactions')
        ->where('id',$request->transaction_id)
        ->where('buyer_id', $request->buyer_id)
        ->firstOrFail();

        return response()->json(['code' => 201, 'messages' => 'success', 'data' => $data]);
    }
    
    public function checkoutBuyer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'transaction_id' => 'required|numeric',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['code' => 401,'messages'=>'error', 'data' => $validator->errors()]);
        }
        // dd($request->all());
        $data = transaction::find($request->transaction_id)
        ->update([
            'status' => 'paid',
        ]);
        
        return response()->json(['code' => 201, 'messages' => 'success', 'data' => "Successfully Paid Your Orders"]);

    }
}
