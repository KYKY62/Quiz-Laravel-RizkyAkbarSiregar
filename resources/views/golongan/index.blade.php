@extends('layouts.app')

@section('content')
    <h2>Data Golongan
        <a class="btn btn-primary btn-sm float-end" href="{{ url('golongan/create') }}">Tambah Data Golongan</a>
    </h2>
    <table class="table table-bordered table-hover">
        @if ($rows->isEmpty())
            <h4 class="mt-5 text-center text-danger">Tidak Ada Data.<br> Harap Masukkan Data terlebih dahulu</h4>
        @else
            <tr class="table-success">
                <th id="" class="text-center">ID</th>
                <th id="" class="text-center">Kode Golongan</th>
                <th id="" class="text-center">NAMA Golongan</th>
                <th id="" class="text-center">EDIT</th>
                <th id="" class="text-center">DELETE</th>
            </tr>
            @foreach ($rows as $row)
                <tr class="table-light">
                    <td class="text-center">{{ $row->gol_id }}</td>
                    <td class="text-center">{{ $row->gol_kode }}</td>
                    <td class="text-center">{{ $row->gol_nama }}</td>
                    <td class="text-center">
                        <a class="btn btn-primary" href="{{ url('golongan/' . $row->gol_id . '/edit') }}">Edit</a>
                    </td>
                    <td class="text-center">
                        <form class=" btn-sm float-none" action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger justify-content-center">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
    @extends('layouts.footer')
@endsection
