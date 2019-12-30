<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BDSType;
use App\Models\Category;
class AjaxController extends Controller
{
    public function getbuytype(Request $request) {
        $type = BDSType::where('idCategory',$request->idCategory)->get();
        return response()->json($type,200);
    }
}
