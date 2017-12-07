<?php

namespace App\Http\Controllers;

use App\Comment;

use App\Http\Requests\StorePostRequest;
use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $query = Post::latest();

        if($month = request('month')){
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = request('year')){
            $query->whereYear('created_at', $year);
        }

        $posts=$query->get();

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) DESC ')
            ->get()
            ->toArray();
//        die(var_dump($archives));

        return view('posts.index', compact('archives','posts'));
    }

    public function create()
    {
        return view ('posts.create');
    }


    public function store(StorePostRequest $request)
    {
//        $this->validate(request(), [
//            'title' => 'required',
//            'body' => 'required'
//        ]);
//        $user_login_id = auth()->id();
//        Post::create([
//            'title'=> $request['title'],
//            'body'=> $request['body'],
//            'user_id'=> $user_login_id
//        ]);


        auth()->user()->publish( new Post(request(['title', 'body'])));



        return redirect('/');

    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


}
