@extends('layouts.master')

@section('content')
  <div class="w3-card-2 w3-margin">

    <div class="w3-container w3-teal">
      <h2>Post:</h2>
    </div>

    <form class="w3-card-2 w3-padding" method="POST" action="/posts">
      {{ csrf_field() }}
      <label class="w3-text-teal" for="title"><b>Title</b></label>
      <input class="w3-input w3-border w3-light-grey" type="text" id="title" name="title" required >
      <br />
      <label class="w3-text-teal" for="body"><b>Body</b></label>
      <br />
      <textarea rows="5" id="body" name="body" class="w3-border w3-light-grey" style="width: 100%;" required></textarea>
      <br />

      <div class="w3-border w3-light-grey">
        <p>
            <input class="w3-check w3-margin" type="checkbox" id="javascript" name="tags[]" value="1" />
            <label>javascript</label>

            <input class="w3-check w3-margin" type="checkbox" id="vuejs" name="tags[]" value="2" />
            <label>vuejs</label>

            <input class="w3-check w3-margin" type="checkbox" id="php" name="tags[]" value="3" />
            <label>php</label>

            <input class="w3-check w3-margin" type="checkbox" id="laravel" name="tags[]" value="4" />
            <label>laravel</label>

            <input class="w3-check w3-margin" type="checkbox" id="mysql" name="tags[]" value="5" />
            <label>mysql</label>
        </p>
      </div>

      <br /><br />
      <button class="w3-btn w3-blue-grey w3-right" value="Publish">Publish</button>
      <br /><br />
      @include('layouts.errors')
    </form>
  </div>
@endsection
