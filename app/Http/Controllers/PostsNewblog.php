<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Validator;


class PostsNewblog extends Controller
{
    //
    public function index(){
        $data = Blog::all();
        return view('index', ['data'=>$data]);
    }
    
    public function resist(Request $request){
        
//        $request->validate([
//            'title' => 'required',
//            'message' => 'required',
//        ]);
        
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'article' => 'required',
        ]);
        
        if($validator->fails()){
            return redirect('index')
                ->withErrors($validator)
                ->withInput();
        }
        
        $blog = new Blog;
        
        $blog->title = $request->title;
        
        $blog->message = $request->article;
        
        $blog->save();
        
        return redirect('index');
        
//        return view('index',['status' => true]);
    }
    
    public function delete(Request $request){
        $blog = Blog::find($request->id);
        $blog->delete();
        
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
