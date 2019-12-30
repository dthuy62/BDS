<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class CreateUserController extends Controller
{
    public function index()
    {
        return view('admin.aboutus');
    }
    public function create(Request $request)
    {
        $user = new User;

        $user->name = $request->input('name');
        $user->email  = $request->input('email');
        $user->password  = $request->input('password');
        $user->save();
        return redirect('/role-register')->with('status','Thêm dữ liệu thành công');



    }
}
