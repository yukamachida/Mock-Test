<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
class AuthController extends Controller
{

    public function register()
    {
        return view('auth.register');

    }
    // public function create(Request $request)
    // {
    //     $form = $request->all();
    //     User::create($form); //createメソッドでテーブルにデータを挿入
    //     return view('/');
    // }


    public function index()
    {
    
        return view('layouts.index');
    }


    public function login()
    {
        return view('auth.login');
    }

    public function showProfileSetting()
    {
        return view('auth.first_login');
    }


    public function profileSetting(RegisterRequest $request)
    {
        $form = $request->all();
        User::create($form);

        return redirect('mypage/profile');
    }

    public function updateProfile(request $request)
    {
        $form = $request->all();
        
    }
}