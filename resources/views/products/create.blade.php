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
                            <input type="text" name="nazwa" class="form-control" id="input1" placeholder="Nazwa">
                            <label for="input1">Nazwa</label>
                        </div>
                        {{-- <div class="form-floating mb-3">
                            <input type="text" name="kategoria" class="form-control" id="input1" placeholder="Kategoria">
                            <label for="input1">Kategoria</label>
                        </div> --}}
                        <form>
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
                            <input type="text" name="dlugosc_rolki" class="form-control" id="input1" placeholder="Długość rolki">
                            <label for="input1">Długość rolki</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="wysokosc_rolki" class="form-control" id="input1" placeholder="Wysokość rolki">
                            <label for="input1">Wysokość rolki</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="srednica_rolki" class="form-control" id="input1" placeholder="Średnica rolki">
                            <label for="input1">Średnica rolki</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="srednica_tulejki" class="form-control" id="input1" placeholder="Średnica tulejki">
                            <label for="input1">Średnica tulejki</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="ilosc_warstw" class="form-control" id="input1" placeholder="Ilość warstw">
                            <label for="input1">Ilość warstw</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="material" class="form-control" id="input1" placeholder="Materiał">
                            <label for="input1">Materiał</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="perforacja" class="form-control" id="input1" placeholder="Perforacja">
                            <label for="input1">Perforacja</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="paletyzacja" class="form-control" id="input1" placeholder="Paletyzacja">
                            <label for="input1">Paletyzacja</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="pakowanie" class="form-control" id="input1" placeholder="Pakowanie">
                            <label for="input1">Pakowanie</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="gramatura" class="form-control" id="input1" placeholder="Gramatura">
                            <label for="input1">Gramatura</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="cena" class="form-control" id="input1" placeholder="Cena">
                            <label for="input1">Cena</label>
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