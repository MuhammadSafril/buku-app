@extends('layout')

@section('content')
    <h1>Tambah Buku Baru</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <label>Judul</label>
        <input type="text" name="judul">
        <label>Penulis</label>
        <input type="text" name="penulis">
        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit">
        <button type="submit">Simpan</button>
    </form>
@endsection
