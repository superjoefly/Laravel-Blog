{{-- Archives --}}
<div class="w3-border-top">
  <div class="w3-container w3-padding">
    <h4>Archives:</h4>
  </div>
  <div class="w3-container w3-white">
  <p>
    @foreach ($archives as $archive)
      <a href="/?month={{$archive['month']}}&year={{$archive['year']}}" class="w3-tag w3-light-grey w3-margin-bottom w3-hover-teal"
      style="text-decoration: none;">
        {{$archive['month'] . ' ' . $archive['year']}}
      </a>
    @endforeach
  </p>
  </div>
</div>
