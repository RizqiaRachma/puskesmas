<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //get posts
        $posts  = Post::latest()->paginate(5);
        $users  = Post::count();


        //render view with posts
        return view('admin.apps.user-data', compact('posts', 'users'));
    }
}
