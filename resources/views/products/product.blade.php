@extends('layouts.app')
<main class="py-4" id="main">
    <section class="inner-page" style="padding: 60px 0;">
        <div class="container-fluid ml-lg-0">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
                    <a href="{{ asset('products') }}"><button class="btn btn-info position-absolute ml-2 mt-2">Powrót</button></a>
                    <img src="{{ Storage::disk('google')->url($product->zdjecie) }}" class="img-fluid rounded"  style="width: 100%; height: auto;" alt="{{ $product->nazwa }}">
                </div>
                <div class="col-sm-0 col-md-0 col-lg-5 col-xl-4">
                    <div class="card w-100 float-lg-right mx-auto">
                        <div class="card-body">
                          <h5 class="card-title">{{ $product->nazwa }}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">{{ $product->kategoria }}</h6>
                          <p class="card-text"><b>Długość rolki: </b>{{ $product->dlugosc_rolki ?? '---'}}</p>
                          <p class="card-text"><b>Wysokość rolki: </b>{{ $product->wysokosc_rolki ?? '---'}}</p>
                          <p class="card-text"><b>Średnica rolki: </b>{{ $product->srednica_rolki ?? '---'}}</p>
                          <p class="card-text"><b>Średnica tulejki: </b>{{ $product->srednica_tulejki ?? '---'}}</p>
                          <p class="card-text"><b>Ilość warstw: </b>{{ $product->ilosc_warstw ?? '---'}}</p>
                          <p class="card-text"><b>Materiał: </b>{{ $product->material ?? '---'}}</p>
                          <p class="card-text"><b>Perforacja: </b>{{ $product->perforacja ?? '---'}}</p>
                          <p class="card-text"><b>Paletyzacja: </b>{{ $product->paletyzacja ?? '---'}}</p>
                          <p class="card-text"><b>Pakowanie: </b>{{ $product->pakowanie ?? '---'}}</p>
                          <p class="card-text"><b>Gramatura: </b>{{ $product->gramatura ?? '---'}}</p>
                          <h5 class="text-success">{{ $product->cena}}</h5>
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@section('content')
@endsection