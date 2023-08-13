<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Str;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $sub_categories = SubCategory::orderBy('created_at', 'DESC')->paginate(5);
        $categories = Category::orderBy('created_at', 'ASC')->get();
        return view('backend.sub_category.index', compact('categories', 'sub_categories'));
    }
    public function store(Request $request)
    {
        //generate slug
        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required|integer',
        ]);
        $slug = $this->generateSlug($request->name);
        $sub_category = new SubCategory();
        $sub_category->name = $request->name;
        $sub_category->slug = $slug;
        $sub_category->category_id = $request->category_id;
        $sub_category->save();

        return response()->json([
            'status' => 200,
            'success' => 'Category Created Successfully!',
        ]);
    }
    public function generateSlug($name)
    {
        $sub_category = SubCategory::where('name', $name)->get();
        if ($sub_category->count() > 0) {
            $count = $sub_category->count();
            $slug = Str::slug($name).'-'.$count;
        }else{
            $slug = Str::slug($name);
        }
        return $slug;
    }

    public function edit($id)
    {
        $sub_category = SubCategory::findOrFail(intval($id));
        return response()->json($sub_category);
    }

    public function update(Request $request, $id)
    {
        $sub_category = SubCategory::findOrFail(intval($id));
        //generate slug
        if ($sub_category->name != $request->name) {
            $slug = $this->generateSlug($request->name);
        }else{
            $slug = $sub_category->slug;
        }
        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required|integer',
        ]);
        $sub_category->name = $request->name;
        $sub_category->slug = $slug;
        $sub_category->category_id = $request->category_id;
        $sub_category->update();

        return response()->json([
            'status' => 200,
            'success' => 'Category Has Been Updated Successfully!',
        ]);
    }

    public function destory($id)
    {
        $sub_category = SubCategory::findOrFail(intval($id));
        $sub_category->delete();

        return response()->json([
            'status' => 200,
            'success' => 'Category Has Been Deleted Successfully!',
        ]);
    }
}
