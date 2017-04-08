<!DOCTYPE html>
<html>
<head>
  <?php echo $__env->yieldContent('head'); ?>
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
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>
<section>
<?php echo $__env->yieldContent('content'); ?>
</section>
<br>
   
<footer>
<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</footer>
</body>
</html>
