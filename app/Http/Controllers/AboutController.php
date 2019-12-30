<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends ViewController
{
    public function index()
    {
        return view('abouts');
    }
    // public function index1()
    // {
    //     $about = About::all();
    //     return view('admin.aboutus.index')->with('about',$about);
    // }
    // public function create()
    // {
    //     return view('admin.aboutus.add');
    // }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|',
    //         'phone' => 'required|numeric',
    //         'email'=> 'required'
    //     ],
    //     [
    //         'title.required' => 'Tiêu đề không được để trống',
    //         'phone.required' => 'Số điện thoại không được để trống',
    //         'email.required'=>'Email không được để trống',
    //         'phone.numeric' => 'Số điện thoại phải là chữ số'
    //     ]);
    //     About::create([
    //         'title' => $request->title,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'address' =>$request->address
    //      ]);
    //      return redirect('/admin/aboutus')->with('status','Đã thêm mới thành công');


    // }
}
