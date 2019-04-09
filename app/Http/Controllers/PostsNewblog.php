<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;


class PostsNewblog extends Controller
{
    //
    public function index(){
        $data = Blog::all();
        return view('index', ['data'=>$data]);
    }
    
    public function resist(Request $request){
        
        $blog = new Blog;
        
        $blog->title = $request->title;
        
        $blog->message = $request->article;
        
        $blog->save();
        
        return redirect('index');
    }
    
//    public function store(Request $request){
//        
//        $blog = new Blog;
//        
//        $blog->title = $request->title;
//        
//        $blog->message = $request->message;
//        
//        $blog->save();
//    }
}
