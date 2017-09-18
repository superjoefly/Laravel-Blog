{{-- For Displaying Validation Errors --}}
@if (count($errors))
  <div class="w3-container">
    <div class="w3-pale-red w3-text-red">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endif
