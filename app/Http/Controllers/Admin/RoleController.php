<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RoleController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
    public function edit($id)
    {
        try {
            $users = User::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            echo $e->getMessage();
        }
       
        return view('admin.register_edit')->with('users',$users);
    } 
    public function update(Request $request, $id)
    {
        $users = User::find($id); // Tim ID de cap nhat
        $users->name = $request->input('name');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/admin/role-register')->with('status','Dữ liệu của bạn đã được cập nhật !');
    }
    
}
// public function index()
// 		{
// 				$category = Category::all();
// 				return view('admin.category.index')->with('category',$category);
// 		}
// 		public function store(Request $request)
// 		{
				
// 					Category::create([
// 							'name' => $request->name,
// 							'slug' =>Str::slug($request->name),
// 							'status' => $request->status
// 					]);
// 			 return redirect('/category');
			 
// 		}