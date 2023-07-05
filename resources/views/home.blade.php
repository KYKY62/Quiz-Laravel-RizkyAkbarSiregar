@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <img class="w-60 m-auto"
                        src="https://img.freepik.com/free-vector/welcome-word-flat-cartoon-people-characters_81522-4207.jpg?w=740&t=st=1688546469~exp=1688547069~hmac=04e703483f0c6c9f197af8be956f6137fee2e71401bf6205fc9cedfc6255685e"
                        class="card-img-top" alt="img/4207.jpg">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <h5 class="card-title text-center">Selamat Datang di Halaman Depan Warung Rizky</h5>
                        <p class="card-text text-center">Website Ini Merupakan Tugas MataKuliah PBWL dengan Menggunakan
                            FrameWork Laravel</p>
                        <a href="{{ url('/pelanggan') }}"
                            class="btn btn-primary my-3 w-100">{{ __('Anda Berhasil Login') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
