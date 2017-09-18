<div class="w3-bar w3-border-bottom">
  <a href="/" class="w3-bar-item w3-button w3-text-teal w3-hoverable w3-hover-teal">Home</a>
  @if (Auth::check())
    <a href="/posts/create" class="w3-bar-item w3-button w3-text-teal w3-hoverable w3-hover-teal">Post</a>
    @else
    <a href="/register" class="w3-bar-item w3-button w3-text-teal w3-hoverable w3-hover-teal">Register</a>
  @endif

  @if (Auth::check())
    <a href="/logout" class="w3-bar-item w3-button w3-text-teal w3-hoverable w3-hover-teal w3-right">Logout</a>
    <a href="#" class="w3-bar-item w3-button w3-text-teal w3-hoverable w3-hover-teal w3-right">{{Auth::user()->name}}</a>
    @else
    <a href="/login" class="w3-bar-item w3-button w3-text-teal w3-hoverable w3-hover-teal w3-right">Login</a>
  @endif
</div>
