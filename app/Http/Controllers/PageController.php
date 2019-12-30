<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class PageController extends Controller
{

    // public function getSignin()
    // {
    //     return view('auth.login');
    // }
    public function postSignin(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|max:20',
            'confirm_password' => 'required|same:password'


        ],
        [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Không đúng định dạng',
            'email.unique' => 'Email đã sử dụng',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'confirm_password.same' => 'Mật khẩu không khớp',
            'password.min' => 'Mật khẩu ít nhất 6 ký tự'

        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
       $user->save();
       return redirect()->back()->with('success','Tạo tài khoản thành công');

    }
    public function postLogin(Request $request)
    {
        // attempt() : kiểm tra key/value có trong table hay không
        // attempt() : chỉ có false or true
        if(Auth::attempt($request->only('email','password')))
        {
            return redirect('/');
        }
        return redirect('/login');
    }
    // public function postLogout()
    // {
    //     Auth::logout();
    //     return redirect('/');
    // }
}
