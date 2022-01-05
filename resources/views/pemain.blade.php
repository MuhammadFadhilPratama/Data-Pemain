@extends('layouts.main')

@section('container')
    <div class="container mt4">
        @foreach ($pemain as $pemain_posts)
            <article>
                <h2><a href="/pemain/{{ $pemain_posts->no_punggung }}">{{ $pemain_posts->nama_pemain }}</a></h2>
                <p>{{ $pemain_posts->ket_pemain }}</p>
            </article>
        @endforeach
    </div>
@endsection