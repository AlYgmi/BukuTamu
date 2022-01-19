<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login </title>
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body class="text-center">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <main class="form-signin">
                    <h1 class="h3 mb-3 fw-nomal">Login Jika kamu Admin</h1>
                    <form>
                        {{-- <img class="mb-4" src="" alt="" width="72" height="57"> --}}
            
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-outline-primary mt-3">Login</button>
                    </form>
                    <small class="d-block mt-3">Belum Terdaftar sebagai admin? <a href="/register">Daftar sekarang!</a></small>
                </main>
            </div>
        </div>
    </div>
</body>
</html>