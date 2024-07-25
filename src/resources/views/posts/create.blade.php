@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/create.css">
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
    <form class="blog__create" action="{{ route('posts.store') }}" method="post">
        @csrf

        <div class="form-group">
        <label for="title">タイトル</label>
        <input type="text" name="title" value="{{ old('title') }}" class="form-item">
    </div>

    <div class="form-group">
        <label for="content">コンテンツ</label>
        <textarea name="content" class="form-item">{{ old('content') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">作成する</button>
</form>

@endsection