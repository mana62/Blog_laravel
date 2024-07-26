@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/index.css">
@endsection

@section('content')

<h2>Blog記事一覧</h2>
<article class="blog__article">

    <div class="blog__article-lists">
    @foreach ($posts as $post) {{--indexメソッドの部分を配列で返す--}}

    <div class="article__ttl">
                {{ $post->title }}{{--投稿されたpostの中のtitleを表示--}}
            </div>

                <div class="article__content">{{--投稿されたpostの中のcontentを表示--}}
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
    <div style="text-align: right;" class="blog__aside-content">
        <form class="form-aside" action="{{ route('posts.index') }}" method="get">
            @csrf

            <input class="aside-content-input" type="text" name="search" value="サイト内検索">
            <button style="width:60px" type="submit">検索</button>
        </form>
        <div class="aside-img">
            <img src="img/cake.jpg" alt="">
        </div>
    </div>
</aside>
@endsection