@extends('layouts.master')
@section('head')
    <title>Sign in</title>
      <link href="/css/signin.css" rel="stylesheet">
@endsection 
@section('content')
<br>
    <div class="container">
    <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Login</label>
        <input type="text" id="input" class="form-control" placeholder="Login" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> 
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  @endsection