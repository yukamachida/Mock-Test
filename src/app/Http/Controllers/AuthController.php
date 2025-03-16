<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function create(Request $request)
    {
        $form = $request->all();
        User::create($form); //createメソッドでテーブルにデータを挿入
        return view('/');
    }


    public function index()
    {
        
        return view('index');
    }


    public function login(request $request)
    {
        $form = $request->all();
        User::create($form);
        return redirect('/mypage/profile');

    }

    public function show_profile()
    {
        return view('auth.first_login');
    }
    public function profile_setting(request $request)
    {
        
        $form = $request->all();
        User::create($form);

        return redirect('index');

    }
}