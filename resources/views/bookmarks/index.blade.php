@extends('layouts.app')

@section('content')
<div class="container">
  @forelse($posts as $post)
  <div class="card">
    <div class="card-header">{{ $post->user->name }}</div>
    <div class="card-body">
      <p class="card-text">{{ $post->body }}</p>
      <p class="card-text"><a href="{{ route('posts.show', $post->id) }}">詳細を見る</a></p>
    </div>
  </div>
  @empty
  <p>ブックマークはありません</p>
  @endforelse
</div>
@endsection
