@extends('layouts.app')
<main class="py-4 mt-5" id="main">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-0 col-md-0 col-lg-2 col-xl-1"></div>
                <div class="col-sm-0 col-md-0 col-lg-8 col-xl-10">
                    @if ((session('cart')!==[]) and (session('cart')!==null))
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Produkt</th>
                            <th scope="col">Cena</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $calosc = 0?>
                        @foreach ($products as $product)
                            @foreach (session('cart') as $id)
                            @if($product->id == $id)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td><img class="img-fluid" height="64" width="64" src="{{ Storage::disk('google')->url($product->zdjecie) }}"></td>
                                <td><a href="{{ asset("product/$product->id") }}">{{ $product->nazwa }}</a></td>
                                <td>{{ number_format($product->cena, 0, '.', ' ') }} zł</td>
                                <td><a href="{{ asset("remove_from_cart/$product->id") }}"><button class="btn btn-danger">Usuń</button></a></td>
                                <?php $calosc += (int)$product->cena ?>
                            </tr>
                            @endif
                            @endforeach
                        @endforeach
                                <td>Całość: <span class="text-success">{{ number_format($calosc, 0, '.', ' ') }} zł</span></td>
                        </tbody>
                    </table>
                    @else
                        <h3 class="card-text">Brak produktów w koszyku! <a href="{{ asset('/') }}">Zamów coś tutaj.</a></h3>
                    @endif
                </div>
                <div class="col-sm-0 col-md-0 col-lg-2 col-xl-1"></div>
            </div>
        </div>
    </section>
</main>
@section('content')
@endsection