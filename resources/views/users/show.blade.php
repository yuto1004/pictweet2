@extends('layout')

@section('content')
    <div class="contents row" >
        <p>{{ $name }}さんの投稿一覧</p>
        @foreach($tweets as $tweet)
            <div class="content_post" style="background-image: url({{ $tweet->image }});">
                <p>{{$tweet->text}}</p>
                <span class="name">
                    <a href="#"><span>投稿者</span>{{ $name }}</a>
                </span>
            </div>
        @endforeach
        {{ $tweets->render() }}
    </div>
    <div class="container">
      <!-- ここからフォーム -->
      @if (Auth::check())
        {{ Form::open(['url' => "/tweets/{$tweet->id}/comments"]) }}
          <textarea cols="30" name="text" placeholder="コメントする" rows="2"></textarea>
          <input type="submit" value="SENT">
        {{ Form::close() }}
      @endif
    </div>
</div>
@endsection