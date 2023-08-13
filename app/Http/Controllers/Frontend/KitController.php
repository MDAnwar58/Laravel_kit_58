<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Code;
use App\Models\Comment;
use App\Models\Pay;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class KitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $paies = Pay::all();
        $codes = Code::orderBy('created_at', 'DESC')->paginate(3);
        $categories = Category::orderBy('created_at', 'ASC')->get();
        return view('frontend.kit.index', compact('categories', 'codes', 'paies'));
    }

    public function sub_category($id, Request $request)
    {
        $sub_category = SubCategory::findOrFail(intval($id));
        $sub_category_id = $sub_category->id;
        $codes = Code::where('sub_category_id', $sub_category_id)
                    ->orderBy('created_at', 'DESC')
                    ->paginate(3);

        return view('frontend.partials.main_code', compact('codes'))->render();
    }
    public function searchCode()
    {
        $codes = Code::select('title')->get();
        $data = [];

        foreach ($codes as $item){
            $data[] = $item->title;
        }

        return $data;
    }

    public function search(Request $request)
    {
        $search = $request->ajax_title;
        $search = str_replace(" ", "%", $search);
        $codes = Code::where('title', 'like', '%'.$search.'%')
                        ->orderBy('created_at', 'DESC')
                        ->paginate(3);
        return view('frontend.partials.main_code', compact('codes'))->render();
    }
//    public function searchLoad(Request $request)
//    {
//        $search = $request->title;
//        $codes = Code::where('title', 'like', '%'.$search.'%')
//            ->orderBy('created_at', 'DESC')
//            ->paginate(3);
//        return view('frontend.partials.main_code')->with('codes', $codes);
//    }
//    public function pagination(Request $request)
//    {
//        $codes = Code::orderBy('created_at', 'DESC')
//            ->limit($request->limit)
//            ->offset($request->start)
//            ->get();
//
//        return view('frontend.partials.main_code', compact('codes'))->render();
//    }
    public function pagination()
    {

            $codes = Code::orderBy('created_at', 'DESC')->paginate(3);

            return view('frontend.partials.main_code', compact('codes'))->render();

    }
    public function show($slug)
    {
        $code = Code::where('slug', $slug)->first();
        $comments = Comment::with('child.user')
                    ->where('code_id', $code->id)
                    ->where('p_id', 0)
                    ->orderBy('created_at', 'DESC')
                    ->get();
        return view('frontend.kit.show', compact('code', 'comments'));
    }
}
