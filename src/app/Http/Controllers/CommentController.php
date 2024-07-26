<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = auth()->id();
        $comment->post_id = $post->id;
        $comment->save();

        return redirect()->route('posts.show', $post->id)->with('message', 'コメントが追加されました');
    }

    // コメントを編集
    public function edit(Comment $comment)
    {
        $this->authorize('update', $comment);
//$this->authorizeで権限があるかをチェックできる
        return view('comments.edit', compact('comment'));//編集のページにビュー
    }

    // コメントを更新
    public function update(Request $request, Comment $comment)
    {
        $this->authorize('update', $comment); //$this->authorizeで権限があるかをチェックできる

        $request->validate([
            'content' => 'required',
        ]);

        $comment->update($request->only('content'));//コメントを更新

        return redirect()->route('posts.show', $comment->post_id)->with('message', 'コメントが更新されました');
        //コメントを更新したページをビュー
    }

    // コメントを削除
    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);

        $comment->delete();

        return redirect()->route('posts.show', $comment->post_id)->with('message', 'コメントが削除されました');
    }
}

