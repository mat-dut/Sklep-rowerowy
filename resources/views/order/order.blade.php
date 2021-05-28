@extends('layouts.app')
@section('content')
<main class="py-4 mt-5" id="main">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
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
                                <?php $calosc = 0 ?>
                            @foreach ($products as $product)
                                @foreach (session('cart') as $id)
                                @if($product->id == $id[0])
                                <tr>
                                    <th scope="row">{{ $loop->index+1 }}</th>
                                    <td><img class="img-fluid" height="64" width="64" src="{{ Storage::disk('google')->url($product->zdjecie) }}"></td>
                                    <td><a href="{{ asset("product/$product->id") }}">{{ $product->nazwa }}</a></td>
                                    <td class="text-nowrap"><span class="text-success">{{ number_format($product->cena, 0, '.', ' ') }} zł</span></td>
                                    <td>{{ $id[1] }}</td>
                                    <?php $calosc += (float)$product->cena*$id[1] ?>
                                </tr>
                                @endif
                                @endforeach
                            @endforeach
                                    <td class="text-nowrap">Całość: <span class="text-success">{{ number_format($calosc, 0, '.', ' ') }} zł</span></td>
                            </tbody>
                        </table>
                        @endif
                    </div>
                    <form method="post">
                        @csrf
                        <div class="form-group">
                            <label>Imię</label>
                            <input type="text" name="imie" class="form-control" placeholder="Imię" required>
                        </div>
                        <div class="form-group">
                            <label>Nazwisko</label>
                            <input type="text" name="nazwisko" class="form-control" placeholder="Nazwisko" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Adres email</label>
                            @if (Auth::user() !== null)
                                <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" readonly required>
                            @else
                                <input type="email" name="email" class="form-control" placeholder="Adres e-mail" value="" required>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Numer telefonu</label>
                            <input type="tel"  name="numer_telefonu" class="form-control" pattern="[0-9]{9}" placeholder="123456789" required>
                        </div>
                        <div class="form-group">
                            <label>Adres dostawy</label>
                            <input type="text" name="adres_dostawy" class="form-control" placeholder="Adres dostawy" required>
                        </div>  
                        <input type="hidden" name="produkty" value="{{ json_encode(session('cart')) }}">    
                        <input type="hidden" name="cena" value="{{ $calosc }}">   
                        <button type="submit" class="btn btn-primary btn-lg">Zamów i zapłać (symulowanie płacenia)</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
</main>
@endsection