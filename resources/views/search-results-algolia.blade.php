<!doctype html>
<html>
<head>
  <title>Oplos Bookings.com</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <link rel=icon href="images/milestone_3.png"  type="images/png">
  {{-- IE < 10 support --}}
  {{--[if lte IE 9]>--}}
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
  {{--[endif]--}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.3/dist/instantsearch.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/style.css">
  {{--<link rel="shortcut icon" type="image/x-icon" href="https://res.cloudinary.com/hilnmyskv/image/upload/c_fit,w_32,h_32/algolia-mark.ico" />--}}
</head>
<body>

  {{-- INTERFACE --}}
  <header>
    <a href="."><img src="./assets/img/search.png"/></a>
    <div id="search-input"></div>
  </header>

  <main>
    <div id="left-column">
      <div id="category" class="facet"></div>
      <div id="brand" class="facet"></div>
      <div id="price" class="facet"></div>
      <div id="type" class="facet"></div>
    </div>

    <div id="right-column">
      <div id="sort-by-wrapper"><span id="sort-by"></span></div>
      <div id="stats"></div>
      <div id="hits"></div>
      <div id="pagination"></div>
    </div>
  </main>

  
  {{-- /INTERFACE --}}

  {{-- TEMPLATES --}}
  <script type="text/html" id="hit-template">
    <div class="hit">
      <div class="hit-image">
        <img src="{{'image'}}" alt="{{'name'}}">
      </div>
      <div class="hit-content">
        <h3 class="hit-price">${{'price'}}</h3>
        <h2 class="hit-name"><span>${_highlightResult.description.value</span></h2>
        <p class="hit-description">
          <span>${_highlightResult.description.value</span></p>
      </div>
    </div>
  </script>

  <script type="text/html" id="no-results-template">
    <div id="no-results-message">
      <p>We didn't find any results for the search <em>"{{'query'}}"</em>.</p>
      <a href="." class='clear-all'>Clear search</a>
    </div>
  </script>
  {{-- /TEMPLATES --}}

  {{-- SCRIPTS --}}
  <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.3/dist/instantsearch.min.js"></script>
  <script src="js/search-simplified.js"></script>
  {{-- /SCRIPTS --}}

  {{-- GA --}}
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-98919331-2', 'auto');
    ga('send', 'pageview');
  </script>
  {{-- /GA --}}
</body>
</html>