<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Daftar Tamu</title>
</head>
<body>
    <nav>
        <a href="{{ route('index') }}">
            <h1>DAFTAR BUKU TAMU</h1>
        </a>
        <a href="{{ route('inputForm') }}">Tambahkan daftar</a>
    </nav>
    <header>
        <h3 class="h3_title" align="center">DAFTAR SETIAP TAMU</h3>
    </header>
    <section>
        <table align="center" class="container">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Keterangan</th>
                    <th style="width: 200px" scope="col">Settings</th>
                </tr>
            </thead>
            <tbody>
                {{-- perulangan start --}}
                @forelse ($inputs as $input)
                    <tr>
                        <td>{{ $input->id }}.</td>
                        <td><img src="{{ asset('/image/profile/' . $input->profile) }}" width=100></td>
                        <td>{{ $input->nama }}</td>
                        <td>{{ $input->tlp }}</td>
                        <td>{{ $input->alamat }}</td>
                        <td>{{ $input->keterangan }}</td>
                        <td>
                        <a class="btn_update" href="{{ route('updateForm', $input->id) }}">Edit</a>
                        <a class="btn_delete" href="{{ route('delete', $input->id) }}">Delete</a>
                        </td>
                    </tr>
                    {{-- jika kosong --}}
                    @empty
                        <tr>
                            <td colspan="9">Data kosong</td>
                        </tr>
                    @endempty    
                {{-- @endforelse --}}
            </tbody>
        </table>
    </section>
    <footer>
        <center>
            <br><br>
            <strong><p>Total tamu : {{ $inputs->count() }}</p></strong>
        </center>
    </footer>
</body>
</html>
