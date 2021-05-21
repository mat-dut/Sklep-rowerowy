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
                            <input type="text" name="nazwa" class="form-control" id="input1" placeholder="Nazwa" value="{{ $product->nazwa }}">
                            <label for="input1">Nazwa</label>
                        </div>
                        {{-- <div class="form-floating mb-3">
                            <input type="text" name="kategoria" class="form-control" id="input1" placeholder="Kategoria">
                            <label for="input1">Kategoria</label>
                        </div> --}}
                        <select class="form-select mb-3" name="kategoria" aria-label="Kategoria">
                            <option>--Kategoria--</option>
                            <option selected value="{{ $product->kategoria }}">{{ $product->kategoria }}</option>
                            <option value="Ręczniki w roli">Ręczniki w roli</option>
                            <option value="Ręczniki składane">Ręczniki składane</option>
                            <option value="Papier toaletowy">Papier toaletowy</option>
                            <option value="Prześcieradła">Prześcieradła</option>
                            <option value="Czyściwa papierowe">Czyściwa papierowe</option>
                            <option value="Serwetki papierowe">Serwetki papierowe</option>
                            <option value="Chusteczki higieniczne">Chusteczki higieniczne</option>
                        </select>

                        <div class="form-floating mb-3">
                            <input type="text" name="dlugosc_rolki" class="form-control" id="input1" placeholder="Długość rolki"  value="{{ $product->dlugosc_rolki }}">
                            <label for="input1">Długość rolki</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="wysokosc_rolki" class="form-control" id="input1" placeholder="Wysokość rolki"  value="{{ $product->wysokosc_rolki }}">
                            <label for="input1">Wysokość rolki</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="srednica_rolki" class="form-control" id="input1" placeholder="Średnica rolki"  value="{{ $product->srednica_rolki }}">
                            <label for="input1">Średnica rolki</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="srednica_tulejki" class="form-control" id="input1" placeholder="Średnica tulejki"  value="{{ $product->srednica_tulejki }}">
                            <label for="input1">Średnica tulejki</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="ilosc_warstw" class="form-control" id="input1" placeholder="Ilość warstw"  value="{{ $product->ilosc_warstw }}">
                            <label for="input1">Ilość warstw</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="material" class="form-control" id="input1" placeholder="Materiał"  value="{{ $product->material }}">
                            <label for="input1">Materiał</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="perforacja" class="form-control" id="input1" placeholder="Perforacja"  value="{{ $product->perforacja }}">
                            <label for="input1">Perforacja</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="paletyzacja" class="form-control" id="input1" placeholder="Paletyzacja"  value="{{ $product->paletyzacja }}">
                            <label for="input1">Paletyzacja</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="pakowanie" class="form-control" id="input1" placeholder="Pakowanie"  value="{{ $product->pakowanie }}">
                            <label for="input1">Pakowanie</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="gramatura" class="form-control" id="input1" placeholder="Gramatura"  value="{{ $product->gramatura }}">
                            <label for="input1">Gramatura</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="cena" class="form-control" id="input1" placeholder="Cena"  value="{{ $product->cena }}">
                            <label for="input1">Cena</label>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Wybierz zdjęcie (jeśli nie chcesz zmieniać zostaw puste)</label>
                            <input class="form-control" type="file" name="image" id="formFile" accept=".jpg,.png,.jpeg">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-info text-white w-50">Zapisz</button>
                        </div>
                        <input type="text" name="id" style="display: none;" value="{{ $product->id }}">
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