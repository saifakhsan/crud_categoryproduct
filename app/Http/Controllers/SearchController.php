<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Mencari kategori dan produk berdasarkan query
        $categories = Category::where('name', 'LIKE', "%{$query}%")->get();
        $products = Product::where('name', 'LIKE', "%{$query}%")
                           ->orWhere('description', 'LIKE', "%{$query}%")
                           ->get();

        return view('search.results', compact('query', 'categories', 'products'));
    }
}
