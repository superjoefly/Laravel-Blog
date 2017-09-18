@extends('layouts.master')

@section('content')
  <div class="w3-container w3-margin w3-white">
    <h3>{{ $post->title }}</h3>

    <p>{{ $post->body }}</p>

    {{-- Tags --}}
    <span>
      @if (count($post->tags))
          @foreach ($post->tags as $tag)
              <a href="/posts/tags/{{$tag->name}}"
                class="w3-tag w3-light-grey w3-margin-bottom w3-hover-teal"
                style="text-decoration: none;">
                {{$tag->name}}
              </a>
          @endforeach
      @endif
    </span>

    <span class="w3-right">
      <span class="w3-text-teal">{{$post->user->name}}</span> on
      {{ $post->created_at->toDayDateTimeString() }}
    </span>
  </div>

  {{-- Comments --}}
  <div class="w3-container w3-border-bottom">
    <h4>Comments:</h4>
    @if (count($post->comments) >= 1)
      @foreach ($post->comments as $comment)
        <div class="w3-container">
          <p>{{ $comment->body }}</p>
          <span class="w3-right">
            <span class="w3-text-teal">{{$comment->user->name}}</span> on
            {{ $comment->created_at->diffForHumans() }}
          </span>
          <hr />
        </div>
      @endforeach
    @else
      <p>No comments available...</p>
    @endif
  </div>

  {{-- Add Comments --}}
  @if (Auth::check())
    <h4>Add a comment:</h4>
    <div class="w3-margin">
      <form method="POST" action="/posts/{{ $post->id }}/comments">
        {{ csrf_field() }}
        <textarea rows="5" name="body" class="w3-border w3-white" style="width: 100%; border: none !important;" placeholder="Enter a comment..." required></textarea>
        <br /><br />
        <button class="w3-btn w3-blue-grey w3-right" value="Publish">Submit</button>
        <br /><br />
        @include('layouts.errors')
      </form>
    </div>
    @else
      <div class="w3-panel w3-pale-yellow">
        <p>You must be logged in to comment...</p>
      </div>
  @endif
@endsection
