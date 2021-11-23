<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Area;

class AreaController extends Controller
{
    public function khuvuc() {
        $areas = Area::all();
        return view('khuvuc/danhsach', ['areas' => $areas ]);
    }

    public function tao() {
        return view('khuvuc/tao');
    }

    public function luu(Request $request) {
        $name = $request->name;
        
        $areas = new Area();
        $areas->name = $name;
        
        $areas->save();
        
        return redirect('admin/khuvuc/danhsach');
    }

    public function sua($id) {
       $areas = Area::find($id);
        if($areas) {
            return view('khuvuc/sua', ['areas' => $areas]);
        }
        return(404);
    }

    public function capnhat($id, Request $request) {
      $name =$request->name;

      $areas = Area::find($id);
      if($areas) {
        $areas->name = $name;

        $areas->save();

        return redirect('admin/khuvuc/danhsach');   
      }

      abort(404);
    }

    public function xoa($id) {
        Area::destroy($id);
        return redirect('admin/khuvuc/danhsach');
    }
}