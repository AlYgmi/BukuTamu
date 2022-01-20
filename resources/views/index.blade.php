@extends('layouts.main')
@section('ajax')
    

    <div class="container">
        <div class="text-center"><h3 class="mt" style="color: white">Selamat datang di Buku Tamu</h3></div>
        <div class="row mt-5">
            <div class="col">
                @auth
                <div class="text-center">
                    <a href="/show" class="btn btn-outline-primary">Lihat data</a>
                </div>
                @else
                <div class="text-center">
                    <a href="/input" class="btn btn-outline-primary">Masukkan data</a>
                </div>
                @endauth
            </div>
        </div>
    </div>
    {{-- @auth
        <a href="#">logout</a>
    @endauth --}}
@endsection    


