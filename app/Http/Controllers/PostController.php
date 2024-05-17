<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $posts = Post::all();
         return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
             'title' => 'bail|required|string|max:25',
             'description' => 'bail|required|nullable|string|max:1000',
             'image' => 'bail|required|string|max:255', 
             'detail' => 'bail|required|nullable|string|max:1000',
           
            ]);
            
             $input =$request->all();
             Post::create($input);
             $request->session()->flash('success', 'Formulaire validé avec succès !');
             return redirect('posts.index');
    }

   
    public function show(Post $post)
    {
        return view('posts.show',['posts'=>$post]);
    }

    
    public function edit(Post $post)
    {
        return view('posts.edit',['posts'=>$post]);
    }

 


    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'bail|required|string|max:25',
            'description' => 'bail|required|nullable|string|max:1000',
            'image' => 'bail|required|string|max:255', 
            'detail' => 'bail|required|nullable|string|max:1000',
          
           ]);
           
            $input =$request->all();
            Post::create($input);
            $request->session()->flash('success', 'Formulaire validé avec succès !');
            return redirect('posts.index');
    }

   


    public function destroy(Post $Post)
    {
        $post->delete();
        return redirect('posts.index');
    }

    
}
