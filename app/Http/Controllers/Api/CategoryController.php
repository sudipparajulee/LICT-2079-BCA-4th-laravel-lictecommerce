<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'priority' => 'required',
            'name' => 'required',
        ]);

        $category = Category::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Category created successfully',
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'priority' => 'required',
            'name' => 'required',
        ]);

        $category = Category::find($id);
        $category->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Category updated successfully',
        ]);
    }
}
