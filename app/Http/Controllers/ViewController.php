<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\BDSType;
use App\Models\Buy;
use Illuminate\Support\Facades\View;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}
class ViewController extends Controller
{
    public function __construct()
    {
        $category = Category::where('status', 1)->get();
        $type = BDSType::where('status', 1)->get();
        View::share(['category' => $category, 'type' => $type]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bdsmua1 = Buy::where('status', 1)->where('idCategory', 1)->paginate(3);
        $bdsmua2 = Buy::where('status', 1)->where('idCategory', 2)->paginate(3);
        return view('home', ['bdsmua1' => $bdsmua1, 'bdsmua2' => $bdsmua2]);
    }
    public function getDetail($type)
    {
         $bds_type = Buy::where('idBDSType',$type)->paginate(5);
         return view('detailType')->with('bds_type',$bds_type);

        // $detailType = Buy::where('slug', $slug)->get();
        // $idType = BDSType::where('slug', $slug)->get();
        // if (count($detailType) != 0) {
        //     return view('project_detail', ['detailType' => $detailType]);
        // } else if(count($idType) != 0)
        // {
        //     $bdsByType = Buy::where('idBDSType',$idBDSType->id)->get();
        //     return view('detailType',['Type'=>$bdsByType,'idType'=>$idType]);
        // }


    }
    public function DetailBDS(Request $request)
    {
        $bds = Buy::where('id',$request->id)->first();
        return view('project_detail',compact('bds'));
    }
    public function search(Request $request)
    {
        $bds = Buy::where('title','like','%'.$request->key.'%')->orWhere('price',$request->key)->orWhere('dt',$request->key)->get();
        return view('search',compact('bds'));
    }
}
