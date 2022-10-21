<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function kuma()
    {
        echo "<script>alert('くま！');</script>";
        return view('top');
    }

    public function checkRegister(Request $request)
    {
        $inputs = $request->all();

        $checkPass = $inputs['password'] != $inputs['passwordCheck'];
        $rules = [
            'username' => 'required',
            'password' => 'required',
            'passwordCheck' => 'required',
        ];

        $validator = Validator::make($inputs, $rules);

        if ($validator->fails() || $checkPass) {
            echo "<script>alert('登録エラーです……。');</script>";
            return view('register');
        }
        echo "<script>alert('登録しました！（未実装）');</script>";
        return view('top');
    }

    public function checkLogin(Request $request)
    {
        $inputs = $request->all();

        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];
        $validator = Validator::make($inputs, $rules);

        if ($validator->fails()) {
            echo "<script>alert('ログインエラーです……。');</script>";
            return view('login');
        }

        $validator = Validator::make($inputs, $rules);
        echo "<script>alert('ログインしました（未実装）');</script>";
        return view('top');
    }
}
