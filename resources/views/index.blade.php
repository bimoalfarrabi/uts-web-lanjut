@extends('mainLayout.main')

@section('container')
    <div class="row">
        @foreach ($allBarang as $no => $barang)
            <div class="col-4 col-mb3" style="padding: 25px">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/'. $barang->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $barang->nama }}</b></h5>
                        <p class="card-text">Stok: <b>{{ $barang->stok }}</b></p>
                        <p class="card-text">Genre: {{ $barang->genre }}</p>
                        <p class="card-text"><b>Rp. {{ number_format($barang->harga, 2, ',', '.') }}</b></p>
                        <a href="{{ route('review',  $barang->id) }}"><button type="button" class="btn btn-outline-dark">Detail</button></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
