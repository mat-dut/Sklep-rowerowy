@extends('layouts.app')
<main class="py-4" id="main">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-5">
                    <form method="post">
                        @csrf
                        <div class="d-flex">
                            <select class="form-select mb-3" name="kategoria" aria-label="Kategoria">
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
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($products as $product)  
                    <div class="col-md-5 col-lg-4">
                        <div class="card h-100">
                            <img src="{{ Storage::disk('google')->url($product->zdjecie) }}" class="card-img-top" style="width: 100%; height: 240px;" alt="{{ $product->nazwa }}">
                            <div class="card-body">
                                <h6 class="text-muted">{{ $product->kategoria }}</h6>
                                <h4 class="card-title">{{ $product->nazwa }}</h4>
                                <h5 class="text-success mb-3">{{ number_format($product->cena, 0, '.', ' ') }} zł</h5>
                                <p class="card-text"><a href="{{ route('product', $product->id) }}"><button class="btn btn-info">Przejdź</button></a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@section('content')
@endsection