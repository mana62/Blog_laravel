<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class UserController extends Controller
{
    public function relate(Request $request)

{
    $posts = Post::with('comments')->get();

    $comments = Comment::with('user')->get();

    return view('posts', ['posts' => $posts, 'comments' => $comments]);
}

}
