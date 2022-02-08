<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/login.css">
    <link href="{{ asset('../img/logosmkn.png') }}" rel="icon">
    <title>PPDB SMKN 1 Majalaya | {{ $title }}</title>
  </head>
  <body> 
    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="d-block text-center">{{ session('success') }}</div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/login.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Login</h3>
              <p class="mb-4">Silahkan login dengan akun yang sudah terdaftar</p>
            </div>
            <form action="/masuk" method="post">
              @csrf
              <div class="form-group first">
                <label for="email">Email</label>
                @error('email')
                <div class="alert alert-danger">
                {{ $message }}
                </div>
                @enderror
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"autofocus required value="{{ old('email') }}" id="email">
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                @error('password')
                <div class="alert alert-danger">
                {{ $message }}
                </div>
                @enderror
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required" id="password">
                
              </div>
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Belum Punya Akun ? <a href="/daftar">Silahkan Daftar disini</a></span>
                </label>
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>