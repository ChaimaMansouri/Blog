
 <nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: #607D8B;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <h1 class="navbar-brand mb-0 col-sm-1 " style="color:white">Blog </h1>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item col-md-4">
        <a class="nav-link " href="/" style="color:white">Home</a>
      </li>
      <?php if(! Auth::check()): ?>
      <li class="nav-item col-md-4">
        <a class="nav-link" href="/sign" style="color:white">Sign in</a>
      </li>
      <li class="nav-item col-md-4">
        <a class="nav-link" href="/form" style="color:white">Registration</a>
      </li>
      <?php endif; ?>
      <?php if(Auth::check()): ?>
       <li class="nav-item col-md-4">
        <a class="nav-link" href="#" style="color:white">Profil</a>
      </li>
    </ul>
    
   <a class="nav-link" href="/logout" style="color:white; float:right"> Logout</a>
  <?php endif; ?>
  </div>

</nav>
