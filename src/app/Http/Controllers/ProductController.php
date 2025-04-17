<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;
use App\Http\Requests\ExhibitionRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{
    //一覧
    public function index()
    {

        $products = Product::all();
        $user = auth()->user();
        return view('index', compact('products', 'user'));
    }

    //出品ページ
    public function create()
    {
        $categories = Category::all();
        $conditions = Condition::all();

        return view('item.create', compact('categories', 'conditions'));
    }

    public function store(ExhibitionRequest $request)
    {

    }
    
    //商品詳細
    public function detail($id)
    {
        $product = Product::with(['condition', 'likes.user', 'comments.user'])->findOrFail($id);

        return view('item.detail', compact('product'));
    }

    //購入
    public function purchase()
    {
        $product = Product::all();
        $user = auth()->user();
        return view('purchase', compact('product', 'user'));
    }
}
