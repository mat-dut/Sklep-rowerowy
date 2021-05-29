@extends('layouts.app')

@section('title')
<title>Admin</title>
@endsection

@section('content')
<main class="py-4" id="main">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card text-center">
                        <h5 class="card-header bg-info">Produkty</h5>
                        <div class="card-body">
                            <h5 class="card-title">Utwórz nowy produkt</h5>
                            <a href="{{ route('create_product') }}" class="btn btn-primary">Utwórz</a>
                            <h5 class="card-title mt-4">Zobacz wszystkie produkty</h5>
                            <a href="{{ route('products_table') }}" class="btn btn-primary">Zobacz</a>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
{{-- <script src="./js/admin_edit.js"></script> --}}
@endsection