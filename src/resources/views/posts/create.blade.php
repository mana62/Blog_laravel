@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="css/index.css">
@endsection

@section('content')

<div class="blog__message">
    @if (session('message'))
        <div class="blog-success">{{ session('message') }}</div>
    @endif

    @if ($errors->any())
        <div class="blog-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>


<h2>Blog記事作成</h2>
<table class="blog">
    <form class="blog__create" action="" method="post">
        @csrf

        <tr>
            <th>タイトル</th>
        </tr>
        <tr>
            <td>内容</td>
        </tr>

        <tr>
            <div class="blog__create-ttl">
                <th><input class="blog__create-ttl-input" type="text" name="ttl" value="{{ old('ttl') }}">
            </div>ブログのタイトル</th>
        </tr>

        <tr>
            <div class="blog__create-content">
                <th><textarea class="blog__create-content-textarea" name="content"
                        value="{{ old('content') }}"></textarea>
            </div>ブログの内容</th>
        </tr>

        <div class="blog__create-button">
            <button class="blog__create-content-submit" type="submit">作成する</button>
        </div>
    </form>
</table>





@endsectionF