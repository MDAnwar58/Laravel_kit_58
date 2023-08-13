<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pay;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $pays = Pay::orderBy('created_at', 'DESC')->paginate(5);
        return view('backend.payment.index', compact('pays'));
    }
    public function destory($id)
    {
        $pay = Pay::findOrFail(intval($id));
        $pay->delete();

        return response()->json([
            'status' => 200,
            'success' => 'Payment information has been delete success'
        ]);
    }
}
