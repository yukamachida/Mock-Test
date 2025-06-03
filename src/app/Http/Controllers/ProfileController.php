<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\AddressRequest;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function showMypage(Request $request)
    {
        $user = Auth::user();
        $viewType = $request->query('tab', 'sell');

        if ($viewType === 'buy') {
            $products = $user->Purchases()->with('product')->latest()->get();
        } else {
            
            $products = $user->products()->latest()->get();
        }
        return view('profile.show', [
            'products' => $products,
            'viewType' => $viewType,
        ]);
    }
    public function edit(Request $request)
    {
        $user = Auth::user(); // ログイン中のユーザーを取得

        return view('profile.edit', compact('user'));
    }

    public function update(AddressRequest $request)
    {

        $user = Auth::user();
        //データの更新
        $user->name = $request->name;
        $user->postal_code = $request->postal_code;
        $user->address = $request->address;
        $user->building = $request->building;

        $user->save();
        return redirect('/mypage/profile');
    }

    public function change(Request $request)
    {
        $user = Auth::user();
        $productId = $request->input('product_id');
        $product = Product::find($productId);
        
        return view('profile.change', compact('user'));
    }

    public function changeAddress(AddressRequest $request, $id)
    {
        $user = Auth::user();

        // フォームから受け取った住所情報でユーザー情報を更新
        $user->postal_code = $request->postal_code;
        $user->address = $request->address;
        $user->building = $request->building;
        $user->save();

        $product = Product::findOrFail($id);

        return view('profile.change', compact('user', 'product'));
    }
}
