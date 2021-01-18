@extends('layouts.app')

@section('content')
@foreach($errors->all() as $message)
<div>{{ $message }}</div>
@endforeach

@if(Session::has('message'))
<div>{{ Session::get('message') }}</div>
@endif

<form method="POST" action="http://localhost:8000/me">
  @csrf
  <label>名前: </label><input name="name" type="text" value="{{ $user->name }}" />
  <label>メールアドレス: </label><input name="email" type="email" value="{{ $user->email }}" />
  <button type="submit">変更</button>
</form>
@endsection


<form>
  <input type="text" />
</form>

<form>
  <input type="text" value="{{ $user->name }}" />
  <button type="submit">変更</button>
</form>

<form method="POST" action="http://localhost:8000/me">
  @csrf
  <input name="name" type="text" value="{{ $user->name }}" />
  <button type="submit">変更</button>
</form>

@if(Session::has('message'))
<div>{{ Session::get('message') }}</div>
@endif

<form method="POST" action="{{ route('users.update') }}">
  @csrf
  <input name="name" type="text" value="{{ $user->name }}" />
  <button type="submit">変更</button>
</form>

<form method="POST" action="http://localhost:8000/me">
  @csrf
  <label>名前: </label><input name="name" type="text" value="{{ $user->name }}" />
  <label>メールアドレス: </label><input name="email" type="email" value="{{ $user->email }}" />
  <button type="submit">変更</button>
</form>
