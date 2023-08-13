<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC')->paginate(5);
        return view('backend.category.index', compact('categories'));
    }
    public function store(Request $request)
    {
        //generate slug
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $slug = $this->generateSlug($request->name);
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->save();

        return response()->json([
            'status' => 200,
            'success' => 'Category Created Successfully!',
        ]);
    }
    public function generateSlug($name)
    {
        $category = Category::where('name', $name)->get();
        if ($category->count() > 0) {
            $count = $category->count();
            $slug = Str::slug($name).'-'.$count;
        }else{
            $slug = Str::slug($name);
        }
        return $slug;
    }
    public function edit($id)
    {
        $category = Category::findOrFail(intval($id));
        return response()->json($category);
    }
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail(intval($id));
        // generate slug
        if ($category->name != $request->name) {
            $slug = $this->generateSlug($request->name);
        }else{
            $slug = $category->slug;
        }

        $request->validate([
            'name' => 'required|max:255',
        ]);

        $category->name = $request->name;
        $category->slug = $slug;
        $category->save();

        return response()->json([
            'status' => 200,
            'success' => 'Category Has Been Updated Successfully!',
        ]);
    }
    public function destory($id)
    {
        $category = Category::findOrFail(intval($id));
        $category->delete();

        return response()->json([
            'status' => 200,
            'success' => 'Category Has Been Deleted Successfully!',
        ]);
    }
}
