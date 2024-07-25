@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/index.css">
@endsection

@section('content')

<h2>Blog記事一覧</h2>
<article class="blog__article">

    <div class="blog__article-lists">
    @foreach ($posts as $post)

    <div class="article__ttl">
                {{ $post->title }}
            </div>

                <div class="article__content">
                    {{ $post->content }}
                </div>

                <a href="{{ route('posts.show', $post->id) }}">詳細を見る</a>
            <a href="{{ route('posts.edit', $post->id) }}">編集する</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">削除</button>
            </form>
        @endforeach
    </div>
</article>

<aside class="blog__aside">
    <div class="blog__aside-content">
        <form class="form-aside" action="{{ route('posts.index') }}" method="get">
            @csrf

            <input class="aside-content-input" type="text" name="search" value="サイト内検索">
            <button type="submit">検索</button>
        </form>
        <div class="aside-img">
            <img src="your-image.jpg" alt="">
        </div>
    </div>
</aside>
@endsection