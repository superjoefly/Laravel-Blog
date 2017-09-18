<li class="w3-padding-16">
  <span class="w3-large">
    <a href="/posts/{{ $post->id }}" style="text-decoration: none;" class="w3-text-teal">
      {{ $post->title }}
    </a>
  </span><br>

  <span>
    {{ $post->body }}
  </span>
    <br /><br />
  <span class="w3-right">
    <span class="w3-text-teal">{{$post->user->name}}</span> on
    {{ $post->created_at->toDayDateTimeString() }}
  </span>
  <br />
</li>
