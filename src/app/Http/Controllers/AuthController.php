<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\AddressRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{

    public function showRegisterForm()
    {
        return view('auth.register');

    }

    public function showlogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {

        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->withErrors([
                'email' => 'ログイン情報が登録されていません。',
            ])->withInput(); //入力情報を保持
        }

        $request->session()->regenerate();
        return redirect('/');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user); // 登録したユーザーをログイン状態にする

        session(['registered_name' => $user->name]);

        return redirect('/firstlogin');
    }

    public function showProfileSetting()
    {
        $registeredName = session('registered_name');

        return view('auth.first_login', compact('registeredName'));
    }


    
    public function store(AddressRequest $request)
    {

        $user = Auth::user(); // ログイン中のユーザーを取得

        // ユーザー情報を更新
        $user->update([
            'name' => $request->name,
            'postal_code' => $request->postal_code,
            'address' => $request->address,
            'building' => $request->building,
        ]);

        return redirect('/');

    }
    public function logout(Request $request)
    {
        Auth::logout(); //ユーザーをログアウト
        $request->session()->invalidate(); // セッションデータを削除
        $request->session()->regenerateToken(); //CSRFトークンを再生成

        return redirect('/login');
    }


}