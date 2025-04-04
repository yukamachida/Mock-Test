<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Condition;
use App\Models\User;
use App\Models\Like;
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

    public function store(Request $request)
    {
        $user = Auth::User();
        $productId = $request->input('product_id');

        //既にいいねしているかチェック
        $existingLike = Like::where('user_id', $user->id)->where('product_id', $productId)->first();

        if (!$existingLike) {
            Like::create([
                'user_id' => $user->id,
                'product_id' => $productId,
            ]);
        }
    }

}
