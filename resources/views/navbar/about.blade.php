@extends('layouts.app')
@section('content')
<main class="py-4 mt-5" id="main">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1 class="display-4">Jesteśmy entuzjastami dwóch kółek i o rowerach wiemy wszystko.</h1>
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="height: 500px;">
                          <div class="carousel-item active">
                            <img src="{{ asset('assets/img/bikepic1.jpg') }}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('assets/img/bikepic2.jpg') }}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('assets/img/bikepic3.jpg') }}" class="d-block w-100" alt="...">
                          </div>
                        </div>
                      </div>   
                      <h1 class="display-4 mt-3">Mateusz Dutkiewicz 2F</h1>               
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
</main>
@endsection