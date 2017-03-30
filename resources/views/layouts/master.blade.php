<!DOCTYPE html>

<head>
  @yield('head')
    <script src="/js/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
<script src="/js/bootstrap.js"></script>
<script type="text/javascript" src="/js/dropzone.js"></script>
<link rel="stylesheet" type="text/css" href="/css/dropzone.css">
 
  
</head>
<body>

<header>
@include ('layouts.header')
</header>
<section>
@yield('content')
</section>
<br>
   
<footer>
@include ('layouts.footer')

</footer>
</body>
</html>
