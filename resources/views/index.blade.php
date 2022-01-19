@extends('layouts.main')
@section('ajax')
    

    <div class="container">
        <div class="text-center"><h3 class="mt" style="color: white">Selamat datang di Buku Tamu</h3></div>
        <div class="row mt-5">
            <div class="col">
                <div class="text-center">
                    <a href="/input" class="btn btn-outline-primary" style="margin-left: 400px;">Masukkan data</a>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <a href="/show" class="btn btn-outline-secondary" style="margin-right: 400px;">Lihat data</a>
                </div>
            </div>
        </div>
    </div>
@endsection    


