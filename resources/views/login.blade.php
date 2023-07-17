<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('login.css') }}">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5" style="margin-top: 200px">
      <div class="col-md-6 mt-5 panel-login">
        <h2 class="text-center mt-5 text-white">Login</h2>
        <h6 class="text-center mt-0 text-white">Admin Nanda Laundry</h6>
        <form action="/login-check" method="post">
            {{ csrf_field() }}
          <div class="form-group mt-5">
            <label for="email" class="text-white">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email">
          </div>
          <div class="form-group mt-4">
            <label for="password" class="text-white">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
          </div>
          <button type="submit" class="btn btn-primary mt-1 text-white">Masuk</button>
        </form>
      </div>
    </div>
  </div>

  <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
