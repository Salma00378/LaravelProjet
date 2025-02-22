<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->paginate(10);
        return view('index', compact('posts'));
    }
    

    public function create() {
        return view('create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = Auth::id(); 
        $post->save();

        return view('create');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->route('posts.list')->with('success', 'Article créé avec succès!');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('show', compact('post'));
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);


        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.list')->with('success', 'Article mis à jour avec succès.');
    }


}
