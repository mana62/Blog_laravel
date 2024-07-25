@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="css/index.css">
@endsection

@section('content')

<h2>Blog記事一覧</h2>
<article class="blog__article">

    <div class="blog__article-lists">
        <form class="form-article" action="" method="post">
            @csrf

            <div class="article__ttl">
                <input class="article__ttl-input" name="ttl" type="text" value="記事タイトル">
            </div>

            <div class="article__content">
                <input class="article__content-input" name="content" type="text" value="記事内容">
            </div>
    </div>
    </form>
</article>

<aside class="blog__aside">
    <div class="blog__aside-content">
        <form class="form-aside" action="" method="post">
            @csrf

            <div class="aside-content">
                <input class="aside-content-input" type="text" name="search" value="サイト内検索">サイト内検索
            </div>
            F
            <div class="aside-img">
                <img src="{{--好きな画像--}}" alt="">
            </div>
    </div>
    </form>
</aside>



@endsectionF