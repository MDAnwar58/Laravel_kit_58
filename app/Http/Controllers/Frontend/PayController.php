<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Pay;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('frontend.pay.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'number' => 'required|min:10|max:15',
            'transiction_code' => 'required',
        ]);
        $pay = new Pay();
        $pay->user_id = $request->user_id;
        $pay->number = $request->number;
        $pay->transiction_code = $request->transiction_code;
        $pay->save();

        return response()->json([
            'status' => 200,
            'success' => 'Your Info Has Been Send Successfully!',
        ]);
    }
}
