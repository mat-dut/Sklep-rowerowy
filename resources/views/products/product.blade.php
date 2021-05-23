@extends('layouts.app')
<main class="py-4 mt-5" id="main">
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
                          <p class="card-text"><b>Kolor: </b>{{ $product->kolor ?? '---'}}</p>
                          <p class="card-text"><b>Rozmiar koła: </b><span class="badge bg-primary">{{ $product->rozmiar_kola ?? '---'}}</span></p>
                          <p class="card-text"><b>Rozmiar ramy: </b><span class="badge bg-primary">{{ $product->rozmiar_ramy ?? '---'}}</span></p>
                          <h5 class="text-success">{{ number_format($product->cena, 0, '.', ' ') }} zł</h5>
                          <a href="{{ asset("add_to_cart/$product->id") }}" class="card-link"><button class="btn btn-primary">Dodaj do koszyka</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-0 col-md-0 col-lg-3 col-xl-3"></div>
                <div class="col-sm-0 col-md-0 col-lg-6 col-xl-6">
                    <h3 class="card-header mt-4">{{ $product->nazwa }} - SPECYFIKACJA</h3>
                    <div class="card mt-3">
                        <h5 class="card-header">INFORMACJE</h5>
                        <div class="card-body">
                          <p class="card-text"><b>Marka: </b>{{ $product->marka }}</p>
                          <p class="card-text"><b>Płeć: </b>{{ $product->plec }}</p>
                          <p class="card-text"><b>Kolor: </b>{{ $product->kolor }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">RAMA</h5>
                        <div class="card-body">
                          <p class="card-text"><b>Rozmiar ramy: </b>{{ $product->rozmiar_ramy }}</p>
                          <p class="card-text"><b>Materiał ramy: </b>{{ $product->material_ramy }}</p>
                          <p class="card-text"><b>Widelec: </b>{{ $product->widelec }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">NAPĘD</h5>
                        <div class="card-body">
                          <p class="card-text"><b>Napęd: </b>{{ $product->naped }}</p>
                          <p class="card-text"><b>Przerzutka przednia: </b>{{ $product->przerzutka_przednia }}</p>
                          <p class="card-text"><b>Przerzutka tylna: </b>{{ $product->przerzutka_tylna }}</p>
                          <p class="card-text"><b>Manetki: </b>{{ $product->manetki }}</p>
                          <p class="card-text"><b>Mechanizm korbowy: </b>{{ $product->mechanizm_korbowy }}</p>
                          <p class="card-text"><b>Kaseta/wolnobieg: </b>{{ $product->kaseta }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">HAMULCE</h5>
                        <div class="card-body">
                          <p class="card-text"><b>Typ hamulców: </b>{{ $product->typ_hamulcow }}</p>
                          <p class="card-text"><b>Hamulce: </b>{{ $product->hamulce }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">KOŁA</h5>
                        <div class="card-body">
                          <p class="card-text"><b>Rozmiar koła: </b>{{ $product->rozmiar_kola }}</p>
                          <p class="card-text"><b>Opony: </b>{{ $product->opony }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">KOMPONENTY</h5>
                        <div class="card-body">
                          <p class="card-text"><b>Siodło: </b>{{ $product->siodlo }}</p>
                          <p class="card-text"><b>Pedały: </b>{{ $product->pedaly }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">INFORMACJE HANDLOWE</h5>
                        <div class="card-body">
                          <p class="card-text"><b>Kod produktu: </b>{{ $product->kod_produktu }}</p>
                          <p class="card-text"><b>Rocznik: </b>{{ $product->rocznik }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">OPIS</h5>
                        <div class="card-body">
                          <p class="card-text">{{ $product->opis }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-0 col-md-0 col-lg-3 col-xl-3"></div>
            </div>
        </div>
    </section>
</main>
@section('content')
@endsection