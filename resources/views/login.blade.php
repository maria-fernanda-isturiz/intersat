<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>INTERSAT - Login</title>
    <link rel="stylesheet" href="{{url('/')}}/assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{ url('/') }}/assets/img/favicon/favicon.ico" />
  </head>
<body class="text-center">
    
  <main class="form-signin">
    <form id="formAuthentication" action="{{ route('sign-in') }}" method="POST">
      @method('GET')
      <div class="d-flex justify-content-center">
        <img class="mb-5 float-center" src="{{url('/')}}/assets/img/logos/logo_intersat.png" alt="logo_intersat" width ="500"  >
      </div>
      <h1 class="h3 mb-3 fw-bold fs-2 ">Inicie Sesión</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
        <label for="floatingPassword">Contraseña</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordar sesión
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
      <p class="mt-4 mb-3 text-muted">&copy; INTERSAT <b>2023</b></p>
    </form>
    
    
</main>
<div>
    <!--<img src="{{url('/')}}/assets/img/tree-3.png" alt="auth-tree" class="authentication-image-object-left d-none d-lg-block">
    <img src="{{asset('assets/img/auth-basic-mask-light.png')}}" class="authentication-image d-none d-lg-block" alt="triangle-bg">
    <img src="{{asset('assets/img/tree.png')}}" alt="auth-tree" class="authentication-image-object-right d-none d-lg-block">-->
</div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
