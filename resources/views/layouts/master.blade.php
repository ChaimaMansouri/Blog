<!DOCTYPE html>
<html>
<head>
  @yield('head')
    <script src="/js/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" href="/js/jquery/dist/jquery-ui.css">
<script src="/js/jquery/dist/jquery-ui.min.js"></script>
   
  <link rel="stylesheet" href="css/bootstrap.css">
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
