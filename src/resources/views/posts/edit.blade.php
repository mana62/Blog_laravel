@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/edit.css">
@endsection

@section('content')

<h2>Blog編集</h2>
<div class="blog__edit">
    <form class="form-edit" action="{{ route('comments.update', $comment->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
            <textarea name="content" class="edit-textarea" required>{{ $comment->content }}</textarea>
        </div>
        <button type="submit" class="form-submit">更新する</button>
    </form>
</div>

@endsection