<!DOCTYPE html>

<head>
  <?php echo $__env->yieldContent('head'); ?>
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
