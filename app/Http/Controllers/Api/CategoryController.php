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
        // use quick sort to sort the categories by priority using loop
        for ($i = 0; $i < count($categories); $i++) {
            for ($j = 0; $j < count($categories) - 1; $j++) {
                if ($categories[$j]->priority > $categories[$j + 1]->priority) {
                    $temp = $categories[$j];
                    $categories[$j] = $categories[$j + 1];
                    $categories[$j + 1] = $temp;
                }
            }
        }

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

    public function destroy(Request $request)
    {
        $category = Category::find($request->id);
        $product = Product::where('category_id', $category->id)->count();
        if ($product > 0) {
            return response()->json([
                'success' => false,
                'message' => 'Category has products',
            ]);
        }
        $category->delete();
        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully',
        ]);
    }

    public function categoryproducts($id)
    {
        $products = Product::where('category_id', $id)->get();
        return response()->json($products);
    }
}
