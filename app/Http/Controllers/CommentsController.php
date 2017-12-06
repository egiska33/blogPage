<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(StoreCommentRequest $request, Post $post)
    {
        $post->addComment(request('body'));

//        viskas iskelta i Post modelio metoda addComment

        return back();
    }
}
