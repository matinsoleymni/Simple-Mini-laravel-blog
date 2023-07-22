<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('blog.index' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
       $post = Post::create([
           'image' => $request->img,
           'title' => $request->title,
           'description' => $request->des,
           'body'  => $request->body ,
           'status' => $request->status
       ]);
       return redirect()->route('post.index')->with('success','Create Was successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('blog.show' , compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('blog.edit' , compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
            "image" => $request->img ,
            "title" => $request->title ,
            "description" => $request->des ,
            "body"  => $request->body ,
            "status" => $request->status
        ]);
        return redirect()->route('post.index')->with('success','Edit Was successfuly');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('success','Delete Was successfuly');
    }
}
