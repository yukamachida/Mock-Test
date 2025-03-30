<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Condition;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        
        $products = Product::all();
        $user = auth()->user();
        return view('index', compact('products', 'user'));
    }

}
