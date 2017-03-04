<!DOCTYPE html>
<html>
<head>
  @yield('head')
  <link rel="stylesheet" href="/css/bootstrap.css">
  
  <script src="/js/jquery/dist/jquery.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    
  
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
