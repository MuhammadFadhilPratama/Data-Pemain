@extends('layouts.main')
@section('container')
    <div class="container mt-4">
    <article>
        <h2 class="mb-5">{{ $pemain_detil->nama_pemain }}</h2>

        <p>By Muhammad Fadhil Pratama P dalam posisi -> {{ $pemain_detil->posisi->posisi }}</p>
        {!! $pemain_detil->ket_pemain !!}

        <p><a href="/pemain">Kembali ke Data Pemain</a></p>
@endsection