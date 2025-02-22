<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->get();
        return view('index', compact('posts'));
    }
    

    public function createPost() {
        return view('create');
    }

    public function ajouter(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = Auth::id(); 
        $post->save();

        return view('create');
    }

    public function supprimer($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->route('posts.list')->with('success', 'Article créé avec succès!');
    }

    public function afficher($id)
    {
        $post = Post::findOrFail($id);

        return view('show', compact('post'));
    }


    public function editer($id)
    {
        $post = Post::findOrFail($id);

        return view('edit', compact('post'));
    }

    public function modifier(Request $request, $id)
    {
        $post = Post::findOrFail($id);


        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.list');
    }


}
