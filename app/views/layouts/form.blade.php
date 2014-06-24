<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>eCom</title>
    {{ HTML::style('css/main.css') }}
    <script src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    {{ HTML::script('js/main.js') }}
  </head>
  <body class="form">
    @yield('content')
  </body>
</html>
