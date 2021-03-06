<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use Str;
use Validator;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::paginate(10);
        return view('admin.category.list')->with('category',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        // dd($request);
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status
        ]);
        return redirect('/admin/category')->with('status','Đã thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return response()->json($category,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryRequest $request, $id)
    {

    $category = Category::find($id);
    $category->update(
        [
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'status' => $request->status
    ]
);
    return response()->json(['success'=>'Sửa thành công']);
    //  return redirect('/admin/category')->with('status', 'Sửa được rồi nè');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if(count($category->BDSTypes)=== 0)
        {
            $category->delete();
            return response()->json(['success' => 'Xóa thành công']);
        }
        else
        {
            return response()->json(['success'=> 'Không thể xóa khi còn loại BDS']);
        }

    }
}
