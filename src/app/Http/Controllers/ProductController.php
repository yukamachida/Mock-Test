<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Condition;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        
        $products = Product::all();
        $user = auth()->user();
        return view('index', compact('products', 'user'));
    }

    public function showMypage()
    {
        return view('profile.show');
    }

}
