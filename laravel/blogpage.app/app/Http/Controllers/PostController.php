<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {

        return view('posts.create');
    }

    public function store()
    {



        request()->validate([
            'title' => 'required',
            'content' => 'required',


        ]);

        Post::create([

            'title' => request('title'),
            'content' => request('content'),
        ]);
        return redirect()->route('indexpost');

        // return redirect('/posts');
    }




    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',


        ]);


        $post->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);
        return redirect()->route('indexpost');

        // return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        // $post = Post::find($id);
        $post->delete();
        // return redirect()->Route('indexposts');
        return redirect('/posts');
    }
    // public function destroy(int $id)
    // {
    //     $post = Post::find($id);
    //     $post->delete();
    //     return redirect()->route('posts');

    //     return redirect('/posts');
    // }


 


    public function uploadImage(Request $request, $post_id)
    {
        $data = new PostImage();
        $data['post_id'] = $post_id;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('indexpost');
    }
}
