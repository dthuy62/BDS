<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\BDSType;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTypeRequest;
use Str;
use Validator;


class BDSTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = BDSType::paginate(5);
        return view('admin.typeBDS.list')->with('category',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $category = Category::where('status',1)->get();
        $category = Category::where('status',1)->get();
        return view('admin.typeBDS.add',compact('category'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeRequest $request)
     {
        // $data = $request->all();
        // $data = Str::slug($request->name);
        // dd($data);
        BDSType::create([
            'idCategory' => $request->idCategory,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status
        ]);
        if($request){
            return redirect('/admin/typeBDS')->with('status','Đã thêm mới thành công');
        }
        else
        {
            return back()->with('status','Có lỗi xảy ra! Vui lòng kiểm tra lại');
        }


    }


    /**
     * Display the specified resource.
     *
     * @param  \App\BDSType  $bDSType
     * @return \Illuminate\Http\Response
     */
    public function show(BDSType $bDSType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BDSType  $bDSType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = BDSType::find($id);
        $category = Category::where('status',1)->get();
        return response()->json(['category'=> $category,'type' => $type],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BDSType  $bDSType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required|min:2|max:255'. ($id ? ",id,$id" : ''),
        ],
        [
            'required' => 'Tên loại bất động sản không để trống',
            'min' => 'Tên loại bất động sản phải đủ từ 2-255 ký tự',
            'max' => 'Tên loại bất động sản phải đủ từ 2-255 ký tự',
        ]
    );
    if($validator->fails()){
        return response()->json(['errors' => 'true', 'message' => $validator->errors()],200); // Kiểm tra validator hợp lệ or not
    }
   $type = BDSType::find($id);
   $type->idCategory = $request->input('idCategory');
   $type->name = $request->input('name');
   $type->slug = Str::slug($request->input('name'));
   $type->status = $request->input('status');
   $type->update();
if($type->update())
{
    return response()->json(['result'=> 'Sửa thành công loại bất động sản có id '.$id],200);
}
else
{
    return response()->json(['errors'=> 'Sửa không thành công loại bất động sản có id '.$id],200);
}

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BDSType  $bDSType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = BDSType::find($id);
        if(count($type->buy) > 0)
        {
            if($type->delete())
            {
                return response()->json(['success'=> 'Xóa thành công loại BDS có id '.$id],200);
            }
            else
            {
                return response()->json(['errors' => 'Chưa xóa được loại BDS có id '.$id],200);
            }
        }
        else
            {
                return response()->json(['success','Còn loại BDS ! Không thể xóa']);
            }


    }
}


