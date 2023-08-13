<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Code;
use App\Models\SubCategory;
use File;
use Illuminate\Http\Request;
use Str;

class CodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $codes = Code::orderBy('created_at', 'DESC')->paginate(5);
        $sub_categories = SubCategory::orderBy('created_at', 'ASC')->get();
        return view('backend.main_code.index', compact('sub_categories', 'codes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'des' => 'required',
            'sub_category_id' => 'required|integer',
            'admin_id' => 'required|integer',
            'meta_title' => 'required|max:255',
            'meta_des' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10120',
        ]);
        $slug = $this->generateSlug($request->title);

        $code = new Code();
        $code->title = $request->title;
        $code->slug = $slug;
        $code->admin_id = $request->admin_id;
        $code->sub_category_id = $request->sub_category_id;
        $code->des = $request->des;
        $code->meta_title = $request->meta_title;
        $code->meta_des = $request->meta_des;
        $code->des1 = $request->des1;
        $code->codes1 = $request->codes1;
        $code->des2 = $request->des2;
        $code->codes2 = $request->codes2;
        $code->des3 = $request->des3;
        $code->codes3 = $request->codes3;
        $code->des4 = $request->des4;
        $code->codes4 = $request->codes4;
        $code->des5 = $request->des5;
        $code->codes5 = $request->codes5;
        $code->des6 = $request->des6;
        $code->codes6 = $request->codes6;
        $code->des7 = $request->des7;
        $code->codes7 = $request->codes7;
        $code->des8 = $request->des8;
        $code->codes8 = $request->codes8;
        $code->des9 = $request->des9;
        $code->codes9 = $request->codes9;
        $code->des10 = $request->des10;
        $code->codes10 = $request->codes10;
        $code->des11 = $request->des11;
        $code->codes11 = $request->codes11;
        $code->des12 = $request->des12;
        $code->codes12 = $request->codes12;
        $code->des13 = $request->des13;
        $code->codes13 = $request->codes13;
        $code->des14 = $request->des14;
        $code->codes14 = $request->codes14;
        $code->des15 = $request->des15;
        $code->codes15 = $request->codes15;
        if ($request->hasFile('image')){
            $imageName = time().'-NEW-'.$request->image->getClientOriginalName();
            $request->image->move(public_path('upload/images/'), $imageName);
            $code->image = $imageName;
        }
        $code->save();

        return response()->json([
           'status'=>200,
           'success'=>'Main Code Added Successfully!',
        ]);
    }
    public function generateSlug($title)
    {
        $code = Code::where('title', $title)->get();
        if ($code->count() > 0) {
            $count = $code->count();
            $slug = Str::slug($title).'-'.$count;
        }else{
            $slug = Str::slug($title);
        }
        return $slug;
    }

    public function edit($id)
    {
        $categories = Category::orderBy('created_at', 'ASC')->get();
        $sub_categories = SubCategory::orderBy('created_at', 'ASC')->get();
        $code = Code::findOrFail(intval($id));
        return view('backend.main_code.edit', compact('code', 'categories', 'sub_categories'));
    }
    public function update(Request $request, $id)
    {
        $code = Code::findOrFail(intval($id));
        // generate slug
        if ($code->title != $request->title) {
            $slug = $this->generateSlug($request->title);
        }else{
            $slug = $code->slug;
        }
        $request->validate([
            'title' => 'required|max:255',
            'des' => 'required',
            'sub_category_id' => 'required|integer',
            'admin_id' => 'required|integer',
            'meta_title' => 'required|max:255',
            'meta_des' => 'nullable',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:10120',
        ]);

        $code->title = $request->title;
        $code->slug = $slug;
        $code->admin_id = $request->admin_id;
        $code->sub_category_id = $request->sub_category_id;
        $code->des = $request->des;
        $code->meta_title = $request->meta_title;
        $code->meta_des = $request->meta_des;
        $code->des1 = $request->des1;
        $code->codes1 = $request->codes1;
        $code->des2 = $request->des2;
        $code->codes2 = $request->codes2;
        $code->des3 = $request->des3;
        $code->codes3 = $request->codes3;
        $code->des4 = $request->des4;
        $code->codes4 = $request->codes4;
        $code->des5 = $request->des5;
        $code->codes5 = $request->codes5;
        $code->des6 = $request->des6;
        $code->codes6 = $request->codes6;
        $code->des7 = $request->des7;
        $code->codes7 = $request->codes7;
        $code->des8 = $request->des8;
        $code->codes8 = $request->codes8;
        $code->des9 = $request->des9;
        $code->codes9 = $request->codes9;
        $code->des10 = $request->des10;
        $code->codes10 = $request->codes10;
        $code->des11 = $request->des11;
        $code->codes11 = $request->codes11;
        $code->des12 = $request->des12;
        $code->codes12 = $request->codes12;
        $code->des13 = $request->des13;
        $code->codes13 = $request->codes13;
        $code->des14 = $request->des14;
        $code->codes14 = $request->codes14;
        $code->des15 = $request->des15;
        $code->codes15 = $request->codes15;
        if ($request->hasFile('image')){

            $file_path = public_path().'/upload/images/'.$code->image;

            if (File::exists($file_path)) {
                File::delete($file_path);
            }

            $imageName = time().'-update-'.$request->image->getClientOriginalName();
            $request->image->move(public_path('upload/images'), $imageName);
            $code->image = $imageName;
        }
        $code->save();

        return redirect()->route('admin.main.code')->with('success', 'Main Code Has Been Update Successfully!');
    }
    public function destory($id)
    {
        $code = Code::findOrFail(intval($id));
        $file_path = public_path().'/upload/images/'.$code->image;

        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $code->delete();

        return response()->json([
            'status'=>200,
            'success'=>'Main Code Has Been Deleted Successfully!'
        ]);
    }

    public function searchPagination(Request $request)
    {
        $search = $request->get('search');
        $search = str_replace(" ", "%", $search);
        $codes = Code::where('title', 'like', '%'.$search.'%')
                        ->orderBy('created_at', 'DESC')
                        ->paginate(5);
        return view('backend.partials.main_code_table', compact('codes'))->render();
    }
}
