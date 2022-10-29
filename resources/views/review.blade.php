@extends('mainLayout.main')

@section('container')
    <div class="row align-items-start">
        <div class="col">
            <h1><b>{{ $review->nama }}</b></h1>
            <p>Genre: {{ $review->genre }}</p>
            <p>{{ $review->deskripsi }}</p>
            <p>Stok: <b>{{ $review->stok }}</b></p>
            <p><b>Rp. {{ number_format($review->harga, 2, ',', '.') }}</b></p>
        </div>
        <div class="col">
            <img src="{{ asset('storage/'. $review->image) }}" alt="">
        </div>
    </div>
@endsection
