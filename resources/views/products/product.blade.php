@extends('layouts.app')
@section('content')
<main class="py-4 mt-5" id="main">
    <section class="inner-page" style="padding: 60px 0;">
        <div class="container-fluid ml-lg-0">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
                    <a href="{{ asset('/') }}"><button class="btn btn-outline-dark position-absolute ml-2 mt-2">Powrót</button></a>
                    <img src="{{ Storage::disk('google')->url($product->zdjecie) }}" style="cursor: pointer; width: 100%; height: auto; object-fit: cover;" data-toggle="modal" data-target="#exampleModalPreview" class="img-fluid rounded" alt="{{ $product->nazwa }}">
                </div>
                <div class="modal fade right" id="exampleModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
                    <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
                        <div class="modal-content-full-width modal-content ">
                            <div class=" modal-header-full-width   modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ Storage::disk('google')->url($product->zdjecie) }}" style="cursor: pointer;" class="img-fluid rounded"  style="width: 100%; height: auto;" alt="{{ $product->nazwa }}">
                            </div>
                        </div>
                    </div>
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
                          <p class="card-text  mt-3">Ilość: </p>
                          <select class="form-select w-25 mb-3" id="number" name="hour">
                                <?php for ($i = 1; $i <= 20; $i++) : ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                          </select>
                          <button class="btn btn-primary btn-lg d-flex justify-content-center" id="button_add" data-bs-toggle="offcanvas" data-url="{{ asset("add_to_cart") }}" data-id="{{ $product->id }}" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Dodaj do koszyka</button>

                            <div class="offcanvas offcanvas-end" style="width: 500px;" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasRightLabel">Produkt został dodany do koszyka</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                    <div>
                                        <table class="table w-auto text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td><img src="{{ Storage::disk('google')->url($product->zdjecie) }}" height="128" width="128" class="img-fluid rounded" alt="{{ $product->nazwa }}"></td>
                                                    <td><p class="card-text">{{ $product->nazwa }}</p></td>
                                                    <td><p class="text-success">{{ number_format($product->cena, 0, '.', ' ')}} zł</p></td>
                                                    <td>Ilość: <span id="count"></span></td>
                                                </tr>
                                            </tbody>                                                                              
                                        </table>
                                    </div>
                                    <div class="mt-3"><a href="{{ asset('cart') }}" class="card-link"><button class="btn btn-primary">Przejdź do koszyka</button></a></div>
                                    <div class="mt-3"><button class="btn btn-primary" data-bs-dismiss="offcanvas" aria-label="Close">Kontynuuj zakupy</button></div>
                                    
                            </div>
                            </div>
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
                          <p class="card-text"><b>Marka: </b>{{ $product->marka ?? "---" }}</p>
                          <p class="card-text"><b>Płeć: </b>{{ $product->plec ?? "---" }}</p>
                          <p class="card-text"><b>Kolor: </b>{{ $product->kolor ?? "---" }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">RAMA</h5>
                        <div class="card-body">
                          <p class="card-text"><b>Rozmiar ramy: </b>{{ $product->rozmiar_ramy ?? "---" }}</p>
                          <p class="card-text"><b>Materiał ramy: </b>{{ $product->material_ramy ?? "---" }}</p>
                          <p class="card-text"><b>Widelec: </b>{{ $product->widelec ?? "---" }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">NAPĘD</h5>
                        <div class="card-body">
                          <p class="card-text"><b>Napęd: </b>{{ $product->naped ?? "---" }}</p>
                          <p class="card-text"><b>Przerzutka przednia: </b>{{ $product->przerzutka_przednia ?? "---" }}</p>
                          <p class="card-text"><b>Przerzutka tylna: </b>{{ $product->przerzutka_tylna ?? "---" }}</p>
                          <p class="card-text"><b>Manetki: </b>{{ $product->manetki ?? "---" }}</p>
                          <p class="card-text"><b>Mechanizm korbowy: </b>{{ $product->mechanizm_korbowy ?? "---" }}</p>
                          <p class="card-text"><b>Kaseta/wolnobieg: </b>{{ $product->kaseta ?? "---" }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">HAMULCE</h5>
                        <div class="card-body">
                          <p class="card-text"><b>Typ hamulców: </b>{{ $product->typ_hamulcow ?? "---" }}</p>
                          <p class="card-text"><b>Hamulce: </b>{{ $product->hamulce ?? "---" }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">KOŁA</h5>
                        <div class="card-body">
                          <p class="card-text"><b>Rozmiar koła: </b>{{ $product->rozmiar_kola ?? "---" }}</p>
                          <p class="card-text"><b>Opony: </b>{{ $product->opony ?? "---" }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">KOMPONENTY</h5>
                        <div class="card-body">
                          <p class="card-text"><b>Siodło: </b>{{ $product->siodlo ?? "---" }}</p>
                          <p class="card-text"><b>Pedały: </b>{{ $product->pedaly ?? "---" }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">INFORMACJE HANDLOWE</h5>
                        <div class="card-body">
                          <p class="card-text"><b>Kod produktu: </b>{{ $product->kod_produktu ?? "---" }}</p>
                          <p class="card-text"><b>Rocznik: </b>{{ $product->rocznik ?? "---" }}</p>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">OPIS</h5>
                        <div class="card-body">
                          <p class="card-text">{{ $product->opis ?? "---" }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-0 col-md-0 col-lg-3 col-xl-3"></div>
            </div>
        </div>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset("js/cart.js") }}"></script>
@endsection