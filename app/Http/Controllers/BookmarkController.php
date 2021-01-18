<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;



class BookmarkController extends Controller
{
    public function index()
    {
        $posts = Auth::user()->bookmarkingPosts;

        return view('bookmarks.index', ['posts' => $posts]);
    }

    public function add(Post $post)
    {
        Auth::user()->bookmarkingPosts()->attach($post->id);

        return redirect()->back();
    }


    public function remove(Post $post)
    {
        Auth::user()->bookmarkingPosts()->detach($post->id);

        return redirect()->back();
    }


}
