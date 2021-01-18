@extends('layouts.app')

@section('content')
<div class="container">
  @foreach($posts as $post)
  <div class="card">
    <div class="card-header">{{ $post->user->name }}</div>
    <div class="card-body">
      <p class="card-text">{{ $post->body }}</p>
      <p class="card-text"><a href="{{ route('posts.show', $post->id) }}">詳細を見る</a></p>


      @if(Auth::id() === $post->user_id)
      <form method="POST" action="{{ route('posts.delete', $post->id) }}">
        @csrf
        <button type="submit" class="btn btn-danger">削除</button>
      </form>
      @endif

    </div>
  </div>
  @endforeach
</div>
@endsection
