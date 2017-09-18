@if($flash = session('message'))
  <div id="flash-message">
    {{ $flash }}
  </div>
@endif
