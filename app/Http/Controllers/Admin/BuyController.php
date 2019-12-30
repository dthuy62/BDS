<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Buy;
use App\Models\Category;
use App\Models\BDSType;
use Illuminate\Http\Request;
use Validator;
use File;

use App\Http\Requests\StoreBuyRequest;
use Str;
 use App\Services\ImageService;
// require __DIR__.'/vendor/autoload.php';

class BuyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $image_service;
    public function __construct(ImageService $imageService)
    {
        $this->image_service = $imageService;
    }
    public function index()
    {
        $buy = Buy::where('status',1)->paginate(5);
         return view('admin.buy.index')->with('buy',$buy);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('status',1)->get();
        $type = BDSType::where('status',1)->get();

           return view('admin.buy.add',compact('category','type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuyRequest $request)
    {
    //     if($request->hasFile('image')){
    //         $file = $request->file('image');
    //         $file_name = $file->getClientOriginalName();
    //         $file_type = $file->getMimeType(); // lấy loại file
    //         $file_size = $file->getSize();
    //         if($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg' || $file_type == 'image/gif' || $file_type == 'image/svg')
    //         {
    //          if($file_size <= 10000000){
    //          $file_name = date('d-m-yy').'_'.rand().'_'.Str::slug($file_name);
    //              if($file->move('img/upload/buy',$file_name))
    //              {
    //                      $data = $request->all();
    //                      $data['slug'] = Str::slug($request->title);
    //                      $data['image'] = $file_name;
    //                     // Buy::create($data);
    //                     dd($data);

    //                       return redirect('/admin/buy')->with('success', 'Đã thêm thành công sản phẩm');
    //              }
    //          }else
    //          {
    //              return back()->with('error', 'File quá lớn');
    //          }
    //       }
    //       else
    //       {
    //          return back()->with('error','Không phải file ảnh');
    //       }

    //       } else
    //      {
    //              return back()->with('error','Bạn chưa chọn ảnh cho bất động sản');
    //      }


    //   }
        if($request->hasFile('image')){
            $file = $request->image;
            if( $this->image_service->checkFile($file) == 1) {
                $fileName = $this->image_service->moveImage($file, 'img/upload/buy');
                // dd($fileName);

                    $data = $request->all();
                    $data['slug'] = Str::slug($request->title);
                    $data['image'] = $fileName;

                     Buy::create($data);
                    return redirect('/admin/buy')->with('success','Đã thêm thành công sản phẩm mới');

            } elseif($this->image_service->checkFile($file) == 0) {
                return back()->with('error','Ảnh của bạn quá lớn chỉ được upload ảnh dưới 1mb');
            } else {
                return back()->with('error','File bạn chọn không là hình ảnh');
            }
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function show(Buy $buy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('status',1)->get();
        $type = BDSType::where('status',1)->get();
        $buy = Buy::find($id);
        return response()->json(['category' => $category,'type' => $type,'buy' => $buy],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBuyRequest $request,$id)
    {

        $buy = Buy::find($id);
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        if($request->hasFile('image')){
            $file = $request->image;
            if( $this->image_service->checkFile($file) == 1) {
                $nameImage = $this->image_service->moveImage($file, 'img/upload/buy');
                if($nameImage != 0) {
                    $data['image'] = $nameImage;
                }
            } elseif ($this->image_service->checkFile($file) == 0) {
                return response()->json(['result' => 'Ảnh của bạn quá lớn chỉ được upload ảnh dưới 10mb '.$id],200);
            }
        }else{
            $data['image'] = $buy->image;
        }
        $buy->update($data);
        return response()->json(['result' => 'Đã sửa thành công sản phẩm có id là '.$id],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buy = Buy::find($id);
        $this->image_service->deleteFile($buy->image, 'img/upload/buy');
        $buy->delete();
        return response()->json(['result' => 'Đã xóa thành công sản phẩm có id là '.$id],200);
    }
}
