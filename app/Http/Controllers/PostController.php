<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('backend.post.index', compact('posts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::all();
        $category= Category::all();
        $post= Post::all()->where('id',$id)->first();
        return view('backend.post.detail' , compact(['post','category','user']));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Post::all()->where('id',$id)->first()->delete();
        return redirect()->route('posts.index');
    }
}
