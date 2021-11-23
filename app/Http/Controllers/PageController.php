<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Post;
use App\Models\Store;

class PageController extends Controller
{
    public function thongke() {
        return view('pages/thongke');
    }

    public function trangchu(Request $request) {

        $posts = Post::all();
        $stores = Store::all();


        return view('pages/trangchu', ['posts'=>$posts], ['stores'=>$stores]);
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