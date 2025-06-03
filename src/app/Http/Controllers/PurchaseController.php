<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PurchaseController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $user = Auth::user();

        return view('item.purchase', compact('product', 'user'));
    }

    public function store($id, Request $request)
    {
        

        $request->validate([
            'payment_method' => 'required|in:credit,convenience',
        ]);

     Purchase::create([
            'user_id' => Auth::id(),
            'product_id' => $id,
            'payment_method' => $request->input('payment_method'),
        ]);
       
        return redirect()->route('index');
    }
}
