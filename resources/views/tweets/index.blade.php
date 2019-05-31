@extends('layout')

@section('content')
<div class="contents row">
  @foreach($tweets as $tweet)
    <div class="content_post" style="background-image: url({{ $tweet->image }});">
      <p>{{ $tweet->text }}</p>
      <span class="name"> 
        <a href="#">
          <span>投稿者</span>{{ $tweet->user->name }}
        </a>
      </span>
    </div>
  @endforeach
  {{ $tweets->render() }}
</div>
@endsection
