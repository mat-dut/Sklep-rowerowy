@extends('layouts.app')
<main class="py-4" id="main">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <h1 class="mb-5">{{ $product->nazwa }}</h1>
                    <form method="post" action="../update_product" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="marka" class="form-control" id="input1" placeholder="Marka" value="{{ $product->marka }}">
                            <label for="input1">Marka</label>
                        </div>
                        <form>
                        <div class="form-floating mb-3">
                            <input type="text" name="nazwa" class="form-control" id="input1" placeholder="Nazwa" value="{{ $product->nazwa }}">
                            <label for="input1">Nazwa</label>
                        </div>
                        <select class="form-select mb-3" name="kategoria" aria-label="Kategoria">
                            <option selected>{{$product->kategoria}}</option>
                            <option value="--Kategoria--">--Kategoria--</option>
                            <option value="Rowery krossowe">Rowery krossowe</option>
                            <option value="Rowery BMX">Rowery BMX</option>
                            <option value="Rowery elektryczne">Rowery elektryczne</option>
                            <option value="Rowery górskie MTB">Rowery górskie MTB</option>
                            <option value="Gravele i przełajowe">Gravele i przełajowe</option>
                            <option value="Rowery miejskie">Rowery miejskie</option>
                            <option value="Rowery szosowe">Rowery szosowe</option>
                        </select>
                        <div class="form-floating mb-3">
                            <input type="text" name="cena" class="form-control" id="input1" placeholder="Cena" value="{{ $product->cena }}">
                            <label for="input1">Cena (zł)</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea type="text" style="height: 7rem; resize: none;" maxlength="200" name="opis" class="form-control" id="opis" placeholder="Opis">{{ $product->opis }}</textarea>
                            <label for="input1">Opis <span id="charNum"></span>/200</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="plec" class="form-control" id="input1" placeholder="Płeć" value="{{ $product->plec }}">
                            <label for="input1">Płeć</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="kolor" class="form-control" id="input1" placeholder="Kolor" value="{{ $product->kolor }}">
                            <label for="input1">Kolor</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="rozmiar_ramy" class="form-control" id="input1" placeholder="Rozmiar ramy" value="{{ $product->rozmiar_ramy }}">
                            <label for="input1">Rozmiar ramy</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="material_ramy" class="form-control" id="input1" placeholder="Materiał ramy" value="{{ $product->material_ramy }}">
                            <label for="input1">Materiał ramy</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="widelec" class="form-control" id="input1" placeholder="Widelec" value="{{ $product->widelec }}">
                            <label for="input1">Widelec</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="naped" class="form-control" id="input1" placeholder="Napęd" value="{{ $product->naped }}">
                            <label for="input1">Napęd</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="przerzutka_przednia" class="form-control" id="input1" placeholder="Przerzutka przednia" value="{{ $product->przerzutka_przednia }}">
                            <label for="input1">Przerzutka przednia</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="przerzutka_tylna" class="form-control" id="input1" placeholder="Przerzutka tylna" value="{{ $product->przerzutka_tylna }}">
                            <label for="input1">Przerzutka tylna</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="manetki" class="form-control" id="input1" placeholder="Manetki" value="{{ $product->manetki }}">
                            <label for="input1">Manetki</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="mechanizm_korbowy" class="form-control" id="input1" placeholder="Mechanizm korbowy" value="{{ $product->mechanizm_korbowy }}">
                            <label for="input1">Mechanizm korbowy</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="kaseta" class="form-control" id="input1" placeholder="Kaseta" value="{{ $product->kaseta }}">
                            <label for="input1">Kaseta</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="typ_hamulcow" class="form-control" id="input1" placeholder="Typ hamulców" value="{{ $product->typ_hamulcow }}">
                            <label for="input1">Typ hamulców</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="hamulce" class="form-control" id="input1" placeholder="Hamulce" value="{{ $product->hamulce }}">
                            <label for="input1">Hamulce</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="rozmiar_kola" class="form-control" id="input1" placeholder="Rozmiar koła" value="{{ $product->rozmiar_kola }}">
                            <label for="input1">Rozmiar koła</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="opony" class="form-control" id="input1" placeholder="Opony" value="{{ $product->opony }}">
                            <label for="input1">Opony</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="siodlo" class="form-control" id="input1" placeholder="Siodło" value="{{ $product->siodlo }}">
                            <label for="input1">Siodło</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="pedaly" class="form-control" id="input1" placeholder="Pedały" value="{{ $product->pedaly }}">
                            <label for="input1">Pedały</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="waga" class="form-control" id="input1" placeholder="Waga" value="{{ $product->waga }}">
                            <label for="input1">Waga</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="kod_produktu" class="form-control" id="input1" placeholder="Kod produktu" value="{{ $product->kod_produktu }}">
                            <label for="input1">Kod produktu</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="rocznik" class="form-control" id="input1" placeholder="Rocznik" value="{{ $product->rocznik }}">
                            <label for="input1">Rocznik</label>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Wybierz zdjęcie (jeśli nie chcesz edytować, zostaw puste)</label>
                            <input class="form-control" type="file" name="image" id="formFile" accept=".jpg,.png,.jpeg">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-info text-white w-50">Zapisz</button>
                        </div>
                        <input type="hidden" name="id" value="{{ $product->id }}">
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ secure_asset('js/admin_edit.js') }}"></script>
{{-- <scrip src="./js/admin_edit.js"></scrip> --}}
@section('content')
@endsection