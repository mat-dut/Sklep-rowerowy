@extends('layouts.app')
@section('content')
<main class="py-4 mt-5" id="main">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card mt-1">
                        <h5 class="card-header">Szczegóły zamówienia</h5>
                        <div class="card-body">
                            <p class="card-text"><b>Imię i nazwisko: </b>{{ $imie }} {{ $nazwisko }}</p>
                            <p class="card-text"><b>E-mail: </b>{{ $email }}</p>
                            <p class="card-text"><b>Numer telefonu: </b>{{ $numer_telefonu }}</p>
                            <p class="card-text"><b>Adres dostawy: </b>{{ $adres_dostawy }}</p>
                            <div>
                                @if ((session('cart')!==[]) and (session('cart')!==null))
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
                                    @foreach ($products as $product)
                                        @foreach (session('cart') as $id)
                                        @if($product->id == $id[0])
                                        <tr>
                                            <th scope="row">{{ $loop->index+1 }}</th>
                                            <td><img class="img-fluid" height="64" width="64" src="{{ Storage::disk('google')->url($product->zdjecie) }}"></td>
                                            <td><a href="{{ asset("product/$product->id") }}">{{ $product->nazwa }}</a></td>
                                            <td class="text-nowrap"><span class="text-success">{{ number_format($product->cena, 0, '.', ' ') }} zł</span></td>
                                            <td>{{ $id[1] }}</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    @endforeach
                                            <td class="text-nowrap">Całość: <span class="text-success">{{ number_format($calosc, 0, '.', ' ') }} zł</span></td>
                                    </tbody>
                                </table>
                                @endif
                            </div>
                            <p class="card-text"><b>Status zamówienia: </b>W toku</p>
                            <p class="card-text">Na podany adres e-mail zostało wysłane potwierdzenie zamówienia. Jeśli masz konto w naszym serwisie, zobacz status zamówienia <a href="{{ asset('orders') }}">tutaj</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
</main>
{{ session()->forget('cart') }}
{{ session()->save() }}
@endsection