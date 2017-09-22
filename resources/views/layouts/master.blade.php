<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Master</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/app.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

    <style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
  </head>
  <body class="w3-light-grey">
    <div class="w3-content" style="max-width:100%;" id="app">
      @include('layouts.nav')
      @include('layouts.header')
      @include('layouts.message')

      {{-- Grid --}}
      <div class="w3-row w3-padding">

        {{-- Yielded content is dyanamic and will change from view to view --}}
        @yield('content')

      </div><br />
      @include('layouts.archives')
      @include('layouts.tags')
      @include('layouts.footer')
      {{-- End Grid --}}
    </div>

  <script src="/js/app.js"></script>

  </body>
</html>
