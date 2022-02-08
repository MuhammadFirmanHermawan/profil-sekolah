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
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/register.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Register</h3>
            </div>
            <form action="/daftar" method="post">
              @csrf
              <div class="form-group first">
                <label for="username">Username</label>
                @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username"  autofocus required value="{{ old('username') }}" id="username">
            </div>
            <div class="form-group">
              <label for="name">Nama</label>
              @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"  autofocus required value="{{ old('name') }}" id="name">
          </div>
              <div class="form-group first">
                <label for="email">Email</label>
                @error('email')
                <div class="alert alert-danger">
                {{ $message }}
                </div>
                @enderror
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus required value="{{ old('email') }}" id="email">
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
                <label class="control control--checkbox mb-0"><span class="caption">Sudah punya akun ? <a href="/masuk">Silahkan Login</a></span>
                </label>
              </div>
              <button class="btn btn-lg btn-primary" type="submit">Daftar</button>
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