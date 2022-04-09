<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\detail_transaction;
use App\Models\transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //

    public function getAllOrders(){
        $data = transaction::with('detail_transactions')->get();

        return response()->json(['code' => '201', 'messages' => 'Success Get Data Orders', 'data' => $data]);
    }

    public function DeactivatedUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 401,'messages'=>'error', 'data' => $validator->errors()]);
        }
        
        $data = User::find($request->user_id)->delete();
        
        return response()->json(['code' => 201, 'messages' => 'Successfully Deactivated User', 'data' => NULL]);
    }

    public function deleteOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return response()->json(['code' => 401,'messages'=>'error', 'data' => $validator->errors()]);
        }
        // dd($request);

        $data = transaction::find($request->order_id)->delete();

        return response()->json(['code' => 201, 'messages' => 'Successfully Delete Order', 'data' => NULL]);

    }
}
