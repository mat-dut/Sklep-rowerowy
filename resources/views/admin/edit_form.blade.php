@extends('layouts.app')

@section('content')

<main class="py-4 mb-5 mt-5" id="main">
    <section class="inner-page">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form method="POST" class="needs-validation" action="../update_element">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            Edytuj element
                        </div>
                        <div class="card-body">
                            @if ($element->element_title !== "")
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="title" placeholder="Tytuł" aria-label="title" aria-describedby="basic-addon1" required>
                            </div>
                            @endif
                            @if ($element->element_subtitle !== "")
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="subtitle" placeholder="Podtytuł" aria-label="subtitle" aria-describedby="basic-addon1">
                            </div>
                            @endif
                            @if ($element->element_content !== "")
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="content" placeholder="Treść" aria-label="content" aria-describedby="basic-addon1" required>
                            </div>
                            @endif
                            <button type="submit" class="btn btn-warning">Zapisz</button>
                            <input type="text" name="element_id" style="display: none;" value="{{ $element->element_id }}">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </section>
</main>

@endsection