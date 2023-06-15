@extends('layout.app')

{{-- Head | title --}}
@section('title')
    Laravel DC Comics | Create
@endsection

{{-- Main Content --}}
@section('content')

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-6">

            <h2 class="mb-5">Inserisci tutti i campi per creare il tuo fumetto</h2>

            
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="comic_title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="comic_title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="comic_description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="comic_description" rows="3" name="description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="comic_thumb" class="form-label">Url immagine</label>
                    <input type="text" class="form-control" id="comic_thumb" name="thumb" required>
                </div>
                <div class="mb-3">
                    <label for="comic_price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="comic_price" name="price" required>
                </div>
                <div class="mb-3">
                    <label for="comic_series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="comic_series" name="series" required>
                </div>
                <div class="mb-3">
                    <label for="comic_sale_date" class="form-label">Data Rilascio</label>
                    <input type="text" class="form-control" id="comic_sale_date" name="sale_date" required>
                </div>
                <div class="mb-3">
                    <label for="comic_type" class="form-label">Tipologia</label>
                    <input type="text" class="form-control" id="comic_type" name="type" required>
                </div>
                <div class="mb-3">
                    <label for="comic_artists" class="form-label">Artisti che hanno partecipato alla creazione</label>
                    <input type="text" class="form-control" id="comic_artists" name="artists" required>
                </div>
                <div class="mb-3">
                    <label for="comic_writers" class="form-label">Scrittori del fumetto</label>
                    <input type="text" class="form-control" id="comic_writers" name="writers" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection