<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/input.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <title>Buku Tamu | Input</title>
</head>
<body>
    <nav>
        <a href="{{ route('input') }}">
            <h1>RESET</h1>
        </a>
        <a class="btn_back" href="{{ route('index') }}">Back</a>
    </nav>
    <header>
        <h1 class="h1_title" align="center">MASUKKAN DATA ANDA</h1>
    </header>
    <div class="container">
        <form action="{{ route('input') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="main">
            <div class="col">
                <strong>
                    <label for="nama">Nama</label>
                </strong>
            </div>
            <div class="col_input">
                <input name="nama" type="text" style="width: 100%; box-sizing: border-box" placeholder="nama lengkap" required />
            </div>
        </div>
        <div class="main">
            <div class="col">
                <strong><label for="profile">Ambil foto</label></strong>
            </div>
            <div class="col_input">
                <input name="profile" type="file" style="width: 100%; box-sizing: border-box" class="custom-file-input" required />
            </div>
        </div>
        <div class="main">
            <div class="col">
                <strong><label for="alamat">Alamat lengkap</label></strong>
            </div>
            <div class="col_input">
                <input name="alamat" type="text" style="width: 100% ; box-sizing: border-box;" placeholder="alamat" required/>
            </div>
        </div>
        <div class="main">
            <div class="col">
                <strong><label for="tlp">Nomor Telepon</label></strong>
            </div>
            <div class="col_input">
                <input name="tlp" type="text" style="width: 100%; box-sizing: border-box;" placeholder="nomor telepon" required />
            </div>
        </div>
        <div class="main">
            <div class="col">
                <strong><label for="keterangan">Keterangan</label></strong>
            </div>
            <div class="col_input">
                <textarea type="text" name="keterangan" class="textarea" placeholder="Keterangan" required /></textarea>
            </div>
        </div>
        <div class="main">
            <center>
                <br>
                <button class="btn_send" type="submit" name="add">SUBMIT</button>
            </center>
        </div>
    </form>
    </div>
</body>
</html>