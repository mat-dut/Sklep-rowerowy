@extends('layouts.app')
<main class="py-4" id="main">
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                        <table id="Table_id" class="table table-lg table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                @foreach ($columns as $column)
                                <th style="background-color: #2487ce;" scope="col">{{ $column }}</th>
                                @endforeach
                                <th style="background-color: #2487ce;" scope="col">Edycja</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($elements as $element)
                                    <tr>
                                        {{-- <th scope="row">{{ $loop->index }}</th> --}}
                                        <td>{{ $element->id }}</td>
                                        <td>{{ $element->element_id }}</td>
                                        <td>{{ $element->element_title }}</td>
                                        <td>{{ $element->element_subtitle }}</td> 
                                        <td>{{ $element->element_content }}</td>
                                        <td>{{ $element->updated_at }}</td>
                                        <td><a href="{{ route('edit', $element->element_id) }}"><button type="submit" class="btn btn-warning">Edytuj</button></a></td>
                                    </tr> 
                            @endforeach
                            </tbody>
                        </table>   
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
{{-- <script src="./js/admin_edit.js"></script> --}}
@section('content')
@endsection