@extends('layouts.app')
@section('title')
<title>Produkty</title>
@endsection
@section('content')
<main class="py-5 mt-3 mb-5" id="main">
    <section class="inner-page" style="overflow: auto; padding-bottom: 0 !important;">
        <div class="container m-0">
            <div class="row">
                <div class="col-1 col-md-1"></div>
                    <div class="col-10 col-md-5">
                        <form method="post">
                            @csrf
                            <div class="d-flex">
                                <select class="form-select mb-3" name="kategoria" aria-label="Kategoria">
                                    <option selected>Wszystkie</option>
                                    @if(session('category') !== null)
                                    <option selected value="{{ session('category') }}">{{ session('category') }}</option>
                                    @endif
                                    <option value="Rowery krossowe">Rowery krossowe</option>
                                    <option value="Rowery BMX">Rowery BMX</option>
                                    <option value="Rowery elektryczne">Rowery elektryczne</option>
                                    <option value="Rowery górskie MTB">Rowery górskie MTB</option>
                                    <option value="Gravele i przełajowe">Gravele i przełajowe</option>
                                    <option value="Rowery miejskie">Rowery miejskie</option>
                                    <option value="Rowery szosowe">Rowery szosowe</option>
                                </select>
                                <button class="btn btn-success align-self-start ml-3" type="submit">Wyświetl</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-1 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-lg table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            @foreach ($columns as $column)
                            <th style="background-color: #2487ce;" scope="col">{{ $column }}</th>
                            @endforeach
                            <th style="background-color: #2487ce;" scope="col">Edycja</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    {{-- <th scope="row">{{ $loop->index }}</th> --}}
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->marka }}</td>
                                    <td class="text-nowrap"><a href="{{ route("product", $product->id) }}">{{ $product->nazwa }}</a></td>
                                    <td>{{ $product->kategoria }}</td> 
                                    <td class="text-nowrap">{{ number_format($product->cena, 0, '.', ' ') }} zł</td>
                                    <td>{{ $product->opis }}</td>
                                    <td>{{ $product->plec }}</td>
                                    <td class="text-nowrap">{{ $product->kolor }}</td>
                                    <td>{{ $product->rozmiar_ramy }}</td>
                                    <td>{{ $product->material_ramy }}</td>
                                    <td>{{ $product->widelec }}</td>
                                    <td>{{ $product->naped }}</td>
                                    <td>{{ $product->przerzutka_przednia }}</td>
                                    <td>{{ $product->przerzutka_tylna }}</td>
                                    <td>{{ $product->manetki }}</td>
                                    <td>{{ $product->mechanizm_korbowy }}</td>
                                    <td>{{ $product->kaseta }}</td>
                                    <td>{{ $product->typ_hamulcow }}</td>
                                    <td>{{ $product->hamulce }}</td>
                                    <td>{{ $product->rozmiar_kola }}</td>
                                    <td>{{ $product->opony }}</td>
                                    <td>{{ $product->siodlo }}</td>
                                    <td>{{ $product->pedaly }}</td>
                                    <td>{{ $product->waga }}</td>
                                    <td>{{ $product->kod_produktu }}</td>
                                    <td>{{ $product->rocznik }}</td>
                                    <td><a href="{{ Storage::disk('google')->url($product->zdjecie) }}">Zobacz</a></td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('edit_product', $product->id) }}"><button type="button" class="btn btn-warning mb-2">Edytuj</button></a>
                                        <button data-id="{{ $product->id }}" data-nazwa="{{ $product->nazwa }}" type="button" class="btn btn-danger delete">Usuń</button>
                                    </td>
                                    
                                </tr> 
                        @endforeach
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $('.delete').click(function() {
        Swal.fire({
            title: `Czy na pewno chcesz usunąć ${$(this).data("nazwa")}?`,
            text: "Tej zmiany nie można cofnąć!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Usuń',
            cancelButtonText: 'Anuluj'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `http://localhost/Sklep_rowerowy/remove_product/${$(this).data("id")}`;
                    let timerInterval
        Swal.fire({
            icon: 'info',
            title: 'Trwa usuwanie',
            timer: 5000,
            timerProgressBar: true,
            didOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
                const content = Swal.getContent()
                if (content) {
                const b = content.querySelector('b')
                if (b) {
                    b.textContent = Swal.getTimerLeft()
                }
                }
            }, 100)
            },
            willClose: () => {
            clearInterval(timerInterval)
            }
        })
                }
            })
    });

</script>
@if(session('alertNoti') !== null && session('alertNoti'))
    <script>
        let timerInterval
        Swal.fire({
            icon: 'success',
            title: 'Zapisano!',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
                const content = Swal.getContent()
                if (content) {
                const b = content.querySelector('b')
                if (b) {
                    b.textContent = Swal.getTimerLeft()
                }
                }
            }, 100)
            },
            willClose: () => {
            clearInterval(timerInterval)
            }
        })

        

    </script>
    {{ session()->forget('alertNoti') }}
    @endif
{{-- <script src="./js/admin_edit.js"></script> --}}
@endsection