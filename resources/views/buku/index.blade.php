@extends('layout')

@section('content')
    <h1>Daftar Buku</h1>
    <a href="{{ route('buku.create') }}">Tambah Buku</a>

    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <ul>
        @foreach ($bukus as $buku)
            <li>
                {{ $buku->judul }} - {{ $buku->penulis }} ({{ $buku->tahun_terbit }})
                <a href="{{ route('buku.show', $buku->id) }}">Lihat</a>
                <a href="{{ route('buku.edit', $buku->id) }}">Edit</a>
                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
