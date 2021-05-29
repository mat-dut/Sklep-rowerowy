@extends('layouts.app')

@section('title')
<title>Kontakt</title>
@endsection

@section('content')
<main class="py-4 mt-5" id="main">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h3 class="card-text">Formularz kontaktowy (brak obsługi)</h3>
                        <form>
                            <div class="form-floating mb-3">
                                <input type="text" name="imie" class="form-control" id="input1" placeholder="Imię">
                                <label for="input1">Imię</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="nazwisko" class="form-control" id="input1" placeholder="Nazwisko">
                                <label for="input1">Nazwisko</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="email" class="form-control" id="input1" placeholder="E-mail">
                                <label for="input1">E-mail</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea type="text" style="height: 7rem; resize: none;" maxlength="500" name="opis" class="form-control" id="opis" placeholder="Opis"></textarea>
                                <label for="input1">Treść <span id="charNum"></span>/500</label>
                            </div>
                            <button type="submit" class="btn btn-info text-white">Wyślij</button>
                        </form>
                    </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('js/admin_edit.js') }}"></script>
@endsection