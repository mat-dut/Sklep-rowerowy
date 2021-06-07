@extends('layouts.app')

@section('title')
<title>Zamówienia</title>
@endsection

@section('content')
<main class="py-4 mt-5" id="main">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    @if (count($orders) == 0)
                    <h3 class="card-text">Brak zamówień!</h3>
                    @endif
                    @foreach ($orders as $order)
                        <div class="card mt-2">
                            <h5 class="card-header">Szczegóły zamówienia #NR{{ $order->id }}</h5>
                            <div class="card-body">
                                <p class="card-text"><b>Imię i nazwisko: </b>{{ $order->imie }} {{ $order->nazwisko }}</p>
                                <p class="card-text"><b>E-mail: </b>{{ $order->email }}</p>
                                <p class="card-text"><b>Numer telefonu: </b>{{ $order->numer_telefonu }}</p>
                                <p class="card-text"><b>Adres dostawy: </b>{{ $order->adres_dostawy }}</p>
                                <p class="card-text"><b>Data złożenia zamówienia: </b>{{ $order->created_at }}</p>
                                <div>
                                    
                                    <table class="table text-nowrap-lg text-nowrap-xl text-nowrap-xxl">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Produkt</th>
                                            <th scope="col"></th>
                                            <th scope="col">Cena</th>
                                            <th scope="col">Ilość</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $calosc = 0 ?>
                                        @foreach ($products as $product)
                                            @foreach (json_decode($order->produkty) as $id)
                                            @if($product->id == $id[0])
                                            <tr>
                                                <th scope="row">{{ $loop->index+1 }}</th>
                                                <td><img class="img-fluid" height="64" width="64" src="{{ Storage::disk('google')->url($product->zdjecie) }}"></td>
                                                <td><a href="{{ route("product", $product->id) }}">{{ $product->nazwa }}</a></td>
                                                <td class="text-nowrap"><span class="text-success">{{ number_format($product->cena, 0, '.', ' ') }} zł</span></td>
                                                <td>{{ $id[1] }}</td>
                                                <?php $calosc += $product->cena*$id[1] ?>
                                            </tr>
                                            @endif
                                            @endforeach
                                        @endforeach
                                                <td class="text-nowrap">Całość: <span class="text-success">{{ number_format($calosc, 0, '.', ' ') }} zł</span></td>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="card-text"><b>Status zamówienia: </b>@if($order->zrealizowane=='1') <span class="text-success">Zrealizowane!</span> @elseif ($order->zrealizowane=='0') W toku @else {{ $order->zrealizowane }} @endif</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
</main>
{{ session()->forget('cart') }}
{{ session()->save() }}
@endsection