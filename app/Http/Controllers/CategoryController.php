<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
            'priority' => 'required',
            'name' => 'required',
        ]);
        Category::create($data);
        // return redirect(route('category.index'));
        return redirect()->route('category.index');
    }
}
