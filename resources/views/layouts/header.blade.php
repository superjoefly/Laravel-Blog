<!-- Header - INCLUDE -->
<header class="w3-container w3-center w3-padding-32">
  <h1><b>SJF Blog</b></h1>
  <p>Welcome to the blog of <span class="w3-tag w3-teal">SuperJoeFly</span></p>

    @php
      function RandomQuotes($timebase, $quotesArray) {
        $count = count($quotesArray);
        $index = ($timebase % $count);
        return $quotesArray[$index];
      }
      $dayOfTheYear = date('z');
      $randomQuote = RandomQuotes($dayOfTheYear, $quotes);
      // dd($randomQuote)
    @endphp

    <h3 class="w3-text-teal">{{$randomQuote['body']}}</h3>
    <p>-{{$randomQuote['author']}}</p>
  </p>

  <img src="/images/avatar.png" />
</header>
