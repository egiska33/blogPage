<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\StorePostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view ('posts.create');
    }

    /**
     * @param StorePostRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StorePostRequest $request)
    {


        Post::create($request->all());

        return redirect('/');

    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


}
