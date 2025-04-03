<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AddressRequest;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function edit(AddressRequest $request)
    {
        $user = Auth::user();
       
        return view('profile.edit', compact('user'));
    } 

    public function update(AddressRequest $request)
    {
        $user = Auth::user(); // ログイン中のユーザーを取得

        //データの更新
        $user->name = $request->name;
        $user->postal_code = $request->postal_code;
        $user->address = $request->address;
        $user->building = $request->building;

        $user->save();
        return redirect('/mypage/profile');
    }
}
