<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    
    public function like(Product $product)
    {

        $user = auth()->user();
       
        if ($user->likeProducts->contains($product->id)) {
            $user->likeProducts()->detach($product->id); // すでにいいねしていたら解除
        } else {
            $user->likeProducts()->attach($product->id); // いいねしてなければ追加
        }

        
        return redirect("/item/{$product->id}");

    }

}
