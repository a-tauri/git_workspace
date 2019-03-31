<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;


class PostsNewblog extends Controller
{
    //
    public function index(){
        return view('index');
    }
    
    public function resist(){
        
    }
    
    public function store(Request $request){
        
        $blog = new Blog;
        
        $blog->title = $request->title;
        
        $blog->message = $request->message;
        
        $blog->save();
    }
}
