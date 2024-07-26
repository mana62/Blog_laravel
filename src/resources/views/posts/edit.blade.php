@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/edit.css">
@endsection

@section('content')

<h2>Blog編集</h2>
<div class="blog__edit">
    <form class="form-edit" action="{{ route('comments.update', $post->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
    <label for="title">タイトル</label>
        <input type="text" name="title" value="{{ $post->title }}" class="form-item">
    </div>
    <div class="form-group">
        <label for="content">コンテンツ</label>
        <textarea name="content" class="form-item">{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">更新する</button>
    </form>
</div>

@endsection