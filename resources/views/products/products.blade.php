@extends('layouts.app')
@section('content')
<main class="py-4" id="main">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{ asset('assets/img/bikepic3.jpg') }}" class="d-block w-100 carousel_img" alt="...">
                            <div class="carousel-caption">
                                <h3>SklepRowerowy</h3>
                                <p>Jesteśmy na rynku od 20 lat</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('assets/img/bikepic5.jpg') }}" class="d-block w-100 carousel_img" alt="...">
                            <div class="carousel-caption">
                                <h3>Pełna satysfakcja</h3>
                                <p>Znajdziesz u nas to, czego potrzebujesz</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('assets/img/bikepic2.jpg') }}" class="d-block w-100 carousel_img" alt="...">
                            <div class="carousel-caption">
                                <h3>Szybki czas dostawy</h3>
                                <p>Wyślemy twój rower już w dniu zamówienia</p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                    </div>
                </div>
                <div class="col-md-10"></div>
            </div>
            <div class="row mb-5">
                <div class="col-md-3 col-lg-3"></div>
                <div class="col-md-6 col-lg-6">
                    <form action="../search" method="post">
                        @csrf
                        <div class="input-group mb-3 mt-3 align-self-center">
                            <input type="text" class="form-control" name="searchInput" list="datalistOptions" placeholder="Szukaj..." aria-label="Szukaj..." aria-describedby="searchBtn">
                            <datalist id="datalistOptions">

                                @foreach ($products as $product)
                                    <option value="{{ $product->nazwa }}">
                                @endforeach
                                
                            </datalist>
                            <button class="btn btn-outline-dark" list="datalistOptions" type="submit" id="searchBtn">Szukaj</button>
                            
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-lg-3"></div>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-5">
                    <form action='..' method="post">
                        @csrf
                        <div class="d-flex">
                            <select class="form-select mb-3" name="kategoria" id="kategoria" aria-label="Kategoria">
                                <option selected>Wszystkie</option>
                                @if(session('category') !== null)
                                <option selected value="{{ session('category') }}">{{ session('category') }}</option>
                                @endif
                                <option value="Rowery krossowe">Rowery krossowe</option>
                                <option value="Rowery BMX">Rowery BMX</option>
                                <option value="Rowery elektryczne">Rowery elektryczne</option>
                                <option value="Rowery górskie MTB">Rowery górskie MTB</option>
                                <option value="Gravele i przełajowe">Gravele i przełajowe</option>
                                <option value="Rowery miejskie">Rowery miejskie</option>
                                <option value="Rowery szosowe">Rowery szosowe</option>
                            </select>
                            <button class="btn btn-success align-self-start ml-3" type="submit">Wyświetl</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 col-lg-7"></div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-sm-center justify-content-xl-start">
                @foreach ($products as $product)  
                    <div class="col-md-6 col-lg-5 col-xl-4 col-sm-10">
                        <a href="{{ route('product', $product->id) }}" style="text-decoration: none; color: black;">
                            <div class="card h-100">
                                <img src="{{ Storage::disk('google')->url($product->zdjecie) }}" class="card-img-top" style="width: 100%; height: 240px;" alt="{{ $product->nazwa }}">
                                <div class="card-body">
                                    <h6 class="text-muted">{{ $product->kategoria }}</h6>
                                    <h4 class="card-title">{{ $product->nazwa }}</h4>
                                    <h5 class="text-success mb-3">{{ number_format($product->cena, 0, '.', ' ') }} zł</h5>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

@endsection