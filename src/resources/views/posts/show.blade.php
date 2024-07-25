@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/show.css">
@endsection

@section('content')

<h2>Blog記事詳細</h2>
<div class="blog__detail">
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>

    <h2>コメント</h2>
    @foreach ($post->comments as $comment)
        <div class="card">
            <div class="card-body">
                <p>{{ $comment->content }}</p>
                <p class="text-muted">投稿者: {{ $comment->user->name }} | 投稿日: {{ $comment->created_at }}</p>
                @can('delete', $comment)
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ttl-submit">削除</button>
                    </form>
                @endcan
                @can('update', $comment)
                    <a href="{{ route('comments.edit', $comment->id) }}" class="card-edit">編集</a>
                @endcan
            </div>
        </div>
    @endforeach

    <h2>コメントを追加</h2>
    <form action="{{ route('comments.store', $post->id) }}" method="post">
        @csrf
        <div class="form-group">
            <textarea name="content" class="form-control" required></textarea>
        </div>
        <button type="submit" class="content-submit">コメントを追加</button>
    </form>
</div>

@endsection
