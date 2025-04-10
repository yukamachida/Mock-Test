<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Condition;    
use App\Models\User;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ItemController extends Controller
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

    public function detail($id)
    {
        $product = Product::with(['condition', 'likes', 'comments.user'])->findOrFail($id);
        
        return view('item.detail', compact('product'));
    }
}