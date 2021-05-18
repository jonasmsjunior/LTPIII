<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::get();
        return view('admin.posts.index', compact('posts'));
    }

    public function create(){
        return view('admin.posts.create');
    }

    public function store(StoreUpdatePost $request){
        $post = Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function show($id){
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('posts.index');
        }
        return view('admin.posts.show', compact('post'));
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function edit($id){
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('posts.index');
        }
        return view('admin.posts.edit', compact('post'));
    }

    public function update(StoreUpdatePost $request, $id){
        $post = Post::find($id);
        if(!$post){
            return redirect()->back();
        }
        $post->update($request->all());
        return redirect()
            ->route('posts.index')
            ->with('message', 'Alterado com sucesso')
        ;
    }
}
