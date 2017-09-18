{{-- Tags --}}
<div class="w3-border-top">
  <div class="w3-container w3-padding">
    <h4>Tags:</h4>
  </div>
  <div class="w3-container w3-white">
  <p>
    @foreach ($tags as $tag)
      <a href="/posts/tags/{{$tag}}" class="w3-tag w3-light-grey w3-margin-bottom w3-hover-teal"
      style="text-decoration: none;">
        {{$tag}}
      </a>
    @endforeach
  </p>
  </div>
</div>
