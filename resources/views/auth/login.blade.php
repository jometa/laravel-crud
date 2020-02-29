<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="/assets//auth/login/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets//auth/login/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method='post' action='/login' entype='form-data/multipart'>
      @csrf
      <img class="mb-4" src="/assets//auth/login/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label class="sr-only">Email address</label>
      <input type="email" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
      <label class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required="">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
  

</body></html>