<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function baidang() {
        $posts = Post::all();
        return view('baidang/danhsach', ['posts'=>$posts]);
    }

    public function tao() {
        return view('baidang/tao');
    }

    
    public function luu(Request $request) {
        $title = $request->title;
        $image = $request->file('image')->store('public/anhbaiviet');
        $image = str_replace('public', 'storage', $image);
        $content = $request->content;

        $posts = new Post();
        $posts->title = $title;
        $posts->image = $image;
        $posts->content = $content;

        $posts->save();

        return redirect('admin/baidang/danhsach');
    
    }

    public function sua($id) {
        $posts = Post::find($id);
        
        if($posts) {
            return view('baidang/sua', ['posts' => $posts]);
        }
    }

    public function capnhat($id, Request $request) {
        $title = $request->title;
        $image = null;
        if ($request->file('image')) {
            $image = $request->file('image')->store('public/anhbaiviet');
            $image = str_replace('public', 'storage', $image);
        }
        $content = $request->content;
        $posts = Post::find($id);
        if($posts) {
            $posts->title = $title;
            if ($image) {
                $posts->image = $image;
            }
            $posts->content = $content;
    
            $posts->save(); 

            return redirect('admin/baidang/danhsach');
        }
        abort(404);
    }

    public function xoa($id) {
        Post::destroy($id);
        return redirect('admin/baidang/danhsach');
    }

}