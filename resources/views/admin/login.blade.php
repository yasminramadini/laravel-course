<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jarago - Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div style="background: #ddd; height: 100vh;" class="d-flex justify-content-center align-item-center">
    <div class="bg-white rounded-md p-4 align-self-center">
      <form action="">
        <img src="{{ asset('img/icons/frontend.png') }}" width="30px" height="30px" alt="" class="mx-auto d-block">
        <h3 class="text-center fw-bold mt-3 mb-4">Login</h3>
        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
          <label for="password">Password</label>
          <input type="password" id="password" class="form-control">
        </div>
        <div class="d-grid">
          <div class="btn btn-primary">Login</div>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>