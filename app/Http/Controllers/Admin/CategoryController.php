<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryFormRequest;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $category = category::all();
        return view('admin.category.index',compact('category'));
        // return 'I am in category';
    }
    public function create()
    {
        return view('admin.category.create');
    }
    
    public function store( CategoryFormRequest $request)
    {
        $data = $request->validated();

        $category = new category();
        
        $category->name = request('name');
        $category->slug = request('slug');
        $category->description = request('description');
        // $category->image = request('image');

        if (request('image')) {
            $imageName = time().'_category.'.request('image')->extension();  
            $request->image->move(public_path('images/category'), $imageName);
            $category->image=$imageName;
        }
        $category->meta_title = request('meta_title');
        $category->meta_description = request('meta_description');
        $category->meta_keyword = request('meta_keyword');
        $category->nav_status = $request->nav_status == true ? '1':'0';
        $category->status = $request->status == true ? '1':'0';
        $category->created_by = '1';
        $category->save();

        return redirect('admin/category')->with('message','New Category added');

        
    }
}
