@extends('layouts.app')

@section('title')
<title>Koszyk</title>
@endsection

@section('content')
<main class="py-4 mt-5" id="main">
    <section class="inner-page"">
        <div class="container">
            <div class="row">
                <div class="col-sm-0 col-md-0 col-lg-1 col-xl-1"></div>
                <div class="col-sm-0 col-md-0 col-lg-10 col-xl-10 table-responsive-md">
                    @if ((session('cart')!==[]) and (session('cart')!==null))
                    <table class="table text-nowrap-lg text-nowrap-xl text-nowrap-xxl">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Produkt</th>
                            <th scope="col"></th>
                            <th scope="col">Cena</th>
                            <th scope="col">Ilość</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $calosc = 0 ?>
                        @foreach ($products as $product)
                            @foreach (session('cart') as $id)
                            @if($product->id == $id[0])
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td><img class="img-fluid" height="64" width="64" src="{{ Storage::disk('google')->url($product->zdjecie) }}"></td>
                                <td><a href="{{ route("product", $product->id) }}">{{ $product->nazwa }}</a></td>
                                <td class="text-nowrap"><span class="text-success">{{ number_format($product->cena, 0, '.', ' ') }} zł</span></td>
                                <td>{{ $id[1] }}</td>
                                <td><a href="{{ route("remove_from_cart", $product->id) }}"><button class="btn btn-danger">Usuń</button></a></td>
                                <?php $calosc += (int)$product->cena*$id[1] ?>
                            </tr>
                            @endif
                            @endforeach
                        @endforeach
                                <td class="text-nowrap">Całość: <span class="text-success">{{ number_format($calosc, 0, '.', ' ') }} zł</span></td>
                        </tbody>
                    </table>
                    <div><a class="card-text" href="{{ route('clear_cart') }}"><button type="button" class="btn btn-danger">Wyczyść koszyk</button></a></div>
                    <div class="mt-4"><a class="card-text" href="{{ route('make_order') }}"><button type="button" class="btn btn-info text-white">Zrealizuj zamówienie</button></a></div>
                    @else
                        <h3 class="card-text">Brak produktów w koszyku! <a href="{{ route('main') }}">Zamów coś tutaj.</a></h3>
                    @endif
                </div>
                <div class="col-sm-0 col-md-0 col-lg-1 col-xl-1"></div>
            </div>
        </div>
    </section>
</main>
@endsection