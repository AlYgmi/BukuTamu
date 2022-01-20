<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku tamu | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body style="background-color: black">
    @auth
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="dropdown-item" style="color: white;"><i class="bi bi-box-arrow-right"></i></button>
        </form>
    @else
    <a href="/login" class="container text-decoration-none ms-auto" style="color: white;"><i class="bi bi-box-arrow-in-right"></i></a>
    @endauth
    <div class="container-fluid">
@yield('ajax')
    </div>
<script type="module">
    import { Toast } from 'bootstrap.esm.min.js'
  
    Array.from(document.querySelectorAll('.toast'))
      .forEach(toastNode => new Toast(toastNode))
  </script>
  
</body>
</html>