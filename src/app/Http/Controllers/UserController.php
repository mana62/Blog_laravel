<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function relate(Request $request)

{
$items = Post::with('Post')->get();
return view('posts', ['items' => $items]);

$items = Comment::with('Comment')->get();
return view('posts', ['items' => $items]);
}

}
