@extends('layouts.app')
<main class="py-4" id="main">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <form method="post" action="create_product" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="marka" class="form-control" id="input1" placeholder="Marka">
                            <label for="input1">Marka</label>
                        </div>
                        <form>
                        <div class="form-floating mb-3">
                            <input type="text" name="nazwa" class="form-control" id="input1" placeholder="Nazwa">
                            <label for="input1">Nazwa</label>
                        </div>
                        <select class="form-select mb-3" name="kategoria" aria-label="Kategoria">
                            <option selected>--Kategoria--</option>
                            <option value="Ręczniki w roli">Ręczniki w roli</option>
                            <option value="Ręczniki składane">Ręczniki składane</option>
                            <option value="Papier toaletowy">Papier toaletowy</option>
                            <option value="Prześcieradła">Prześcieradła</option>
                            <option value="Czyściwa papierowe">Czyściwa papierowe</option>
                            <option value="Serwetki papierowe">Serwetki papierowe</option>
                            <option value="Chusteczki higieniczne">Chusteczki higieniczne</option>
                          </select>
                          <div class="form-floating mb-3">
                            <input type="text" name="cena" class="form-control" id="input1" placeholder="Cena">
                            <label for="input1">Cena</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea type="text" name="opis" class="form-control" id="input1" placeholder="Opis"></textarea>
                            <label for="input1">Opis</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="plec" class="form-control" id="input1" placeholder="Płeć">
                            <label for="input1">Płeć</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="kolor" class="form-control" id="input1" placeholder="Kolor">
                            <label for="input1">Kolor</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="rozmiar_ramy" class="form-control" id="input1" placeholder="Rozmiar ramy">
                            <label for="input1">Rozmiar ramy</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="material_ramy" class="form-control" id="input1" placeholder="Materiał ramy">
                            <label for="input1">Materiał ramy</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="widelec" class="form-control" id="input1" placeholder="Widelec">
                            <label for="input1">Widelec</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="naped" class="form-control" id="input1" placeholder="Napęd">
                            <label for="input1">Napęd</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="przerzutka_przednia" class="form-control" id="input1" placeholder="Przerzutka przednia">
                            <label for="input1">Przerzutka przednia</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="przerzutka_tylna" class="form-control" id="input1" placeholder="Przerzutka tylna">
                            <label for="input1">Przerzutka tylna</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="manetki" class="form-control" id="input1" placeholder="Manetki">
                            <label for="input1">Manetki</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="mechanizm_korbowy" class="form-control" id="input1" placeholder="Mechanizm korbowy">
                            <label for="input1">Mechanizm korbowy</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="kaseta" class="form-control" id="input1" placeholder="Kaseta">
                            <label for="input1">Kaseta</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="typ_hamulcow" class="form-control" id="input1" placeholder="Typ hamulców">
                            <label for="input1">Typ hamulców</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="rozmiar_kola" class="form-control" id="input1" placeholder="Rozmiar koła">
                            <label for="input1">Rozmiar koła</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="opony" class="form-control" id="input1" placeholder="Opony">
                            <label for="input1">Opony</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="siodlo" class="form-control" id="input1" placeholder="Siodło">
                            <label for="input1">Siodło</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="pedaly" class="form-control" id="input1" placeholder="Pedały">
                            <label for="input1">Pedały</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="kod_produktu" class="form-control" id="input1" placeholder="Kod produktu">
                            <label for="input1">Kod produktu</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="rocznik" class="form-control" id="input1" placeholder="Rocznik">
                            <label for="input1">Rocznik</label>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Wybierz zdjęcie</label>
                            <input class="form-control" type="file" name="image" id="formFile" accept=".jpg,.png,.jpeg">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-info text-white w-50">Zapisz</button>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
{{-- <script src="./js/admin_edit.js"></script> --}}
@section('content')
@endsection