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
        $product = new Product();
        $product->user_id = auth()->id();
        $product->name = $request->name;
        $product->brand = $request->brand;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->condition_id = $request->condition_id;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/image');
            $product->image = basename($path);
        }
        $product->save();
        dd($product);
        //カテゴリー保存
        $product->categories()->attach($request->categories);

        return redirect('/');

    }

    //商品詳細
    public function detail($id)
    {
        
        $product = Product::with(['condition', 'likes.user', 'comments.user'])->findOrFail($id);

        return view('item.detail', compact('product'));
    }

    //購入
    public function purchaseForm($id)
    {
        $product = Product::findOrFail($id);
        $user = auth()->user();
        return view('item.purchase', compact('product', 'user'));
    }
}
