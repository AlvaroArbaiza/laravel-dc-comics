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

            {{-- Inserisco nell'attributo action la rotta update, passando la variabile $comic che lui stesso andrà a filtrare per ottenere l'id corrispondente all'elemento da modificare nella tabella --}}
            <form action="{{ route('comics.update', $comic ) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="comic_title" class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="comic_title" name="title" value="{{ old('title') ?? $comic['title'] }}">
                    {{-- error --}}
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="comic_description" class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="comic_description" rows="3" name="description">{{ old('description') ?? $comic['description'] }}</textarea>
                    {{-- error --}}
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="comic_thumb" class="form-label">Url Immagine</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="comic_thumb" name="thumb" value="{{ old('thumb') ?? $comic['thumb'] }}">
                    {{-- error --}}
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="comic_price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="comic_price" name="price" value="{{ old('price') ?? $comic['price'] }}">
                    {{-- error --}}
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="comic_series" class="form-label">Serie</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="comic_series" name="series" value="{{ old('series') ?? $comic['series'] }}">
                    {{-- error --}}
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="comic_sale_date" class="form-label">Data Rilascio</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="comic_sale_date" name="sale_date" value="{{ old('sale_date') ?? $comic['sale_date'] }}">
                    {{-- error --}}
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="comic_type" class="form-label">Tipologia</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="comic_type" name="type" value="{{ old('type') ?? $comic['type'] }}">
                    {{-- error --}}
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="comic_artists" class="form-label">Artisti che hanno partecipato alla creazione</label>
                    <input type="text" class="form-control @error('artists') is-invalid @enderror" id="comic_artists" name="artists" value="{{ old('artists') ?? $comic['artists'] }}">
                    {{-- error --}}
                    @error('artists')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="comic_writers" class="form-label">Scrittori del fumetto</label>
                    <input type="text" class="form-control @error('writers') is-invalid @enderror" id="comic_writers" name="writers" value="{{ old('writers') ?? $comic['writers'] }}">
                    {{-- error --}}
                    @error('writers')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection