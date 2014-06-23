<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>eCom</title>
    {{ HTML::style('css/main.css') }}
    <script src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    {{ HTML::script('js/main.js') }}
  </head>
  <body>
    <div>
      <header>
        <h1><span class="accent">e</span>Com</h1>
        <nav>
          <ul>
            <li><a href="/">home</a></li>
            <li><a href="/">about</a></li>
            <li><a href="/">contact</a></li>
          </ul>
        </nav>
      </header>
      <div id="content">
        @yield('content')
      </div>
      <footer>
        <p>&copy; 2014 <span class="logo"><span class="accent">e</span>Com</span></p>
      </footer>
    </div>
  </body>
</html>
