<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('priority')->get();
        return view('category.index',compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'priority' => 'required|numeric',
            'name' => 'required',
        ]);
        Category::create($data);
        // return redirect(route('category.index'));
        return redirect()->route('category.index')->with('success','Category Created Successfully');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'priority' => 'required|numeric',
            'name' => 'required',
        ]);
        $category = Category::find($id);
        $category->update($data);
        return redirect()->route('category.index')->with('success','Category Updated Successfully');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $products = Product::where('category_id',$id)->count();
        if($products>0){
            return redirect()->route('category.index')->with('success','Category Cannot be Deleted, It has products');
        }
        $category->delete();
        return redirect()->route('category.index')->with('success','Category Deleted Successfully');
    }
}
