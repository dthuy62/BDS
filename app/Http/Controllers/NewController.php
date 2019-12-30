<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewController extends ViewController
{
    public function index()
    {
        $new = News::all();
        return view('news')->with('new',$new);
    }
    public function detail(Request $request)
    {
        $new = News::where('id',$request->id)->first();
        return view('news_detail')->with('new',$new);
    }
}
