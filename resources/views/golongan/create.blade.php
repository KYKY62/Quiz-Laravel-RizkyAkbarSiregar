@extends('layouts.app')

@section('content')
    <h2>Input Data Golongan</h2>

    <form action="{{ url('/golongan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Kode Golongan</label>
            <input type="text" name="gol_kode" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Golongan Nama</label>
            <input type="text" name="gol_nama" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
@endsection
