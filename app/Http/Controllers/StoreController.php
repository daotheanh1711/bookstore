<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Store;
use App\Models\Area;

class StoreController extends Controller
{
    public function cuahang() {

        $stores = Store::all();
    
        return view('cuahang/danhsach', ['stores'=>$stores]);
    }

    public function tao() {
        $areas = Area::all();

        return view('cuahang/tao', ['areas'=>$areas]);
    }

    public function luu(Request $request) {
    
        $name = $request->name;
        $address = $request->address;
        $image = $request->file('image')->store('public/anhcuahang');
        $image = str_replace('public', 'storage', $image);
        $phone = $request->phone;
        $email = $request->email;

        $stores = new Store();
        $stores->name = $name;
        $stores->address = $address;
        $stores->image = $image;
        $stores->phone = $phone;
        $stores->email = $email;

        $areas =  Area::find($request->area_id);
        if (! $areas) {
            abort(404);
        }

        $areas->stores()->save($stores);

        return redirect('/admin/cuahang/danhsach');


    }
    public function sua($id) {
        $areas = Area::all();
        $store = Store::find($id);
        if($store) {
            return view('cuahang/sua', ['store' => $store], ['areas' => $areas]);
        }
        return(404);
    }
    
    public function xoa($id) {
        Store::destroy($id);
        return redirect('admin/cuahang/danhsach');
    }
    
    public function inbaocao($id) {
        $store = Store::find($id);
        $pdf = app()->make('dompdf.wrapper');
        $html = view('cuahang/baocao', compact('store'))->render();
        $pdf->loadHTML($html);
        return $pdf->stream();

        
        // return view('cuahang/baocao', ['store'=>$store]);
    }

}