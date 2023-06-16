@extends('layout.app')

{{-- Head | title --}}
@section('title')
    Laravel DC Comics | Comics
@endsection

{{-- Main Content --}}
@section('content')
    <!-- contents -->
    <section id="contents">
        <div class="container">

            <!-- current series -->
            <div id="cur-series">
                <span>current series</span>
            </div>

            <!-- Series -->
            <div class="row my-4">

                @if( Session::has('success') ) 
                    <div class="alert alert-success">
                        {!! Session::get('success') !!} 
                    </div>
                @endif

                @foreach($comics as $book)
                    <div class="series">
    
                        {{-- img --}}
                        <a href="{{ route('comics.show', [ 'comic' => $book['id'] ]) }}">
                            <img src="{{ $book['thumb'] }}" alt="{{ $book['series'] }}">
                        </a>
    
                        {{-- title --}}
                        <h5 class="titolo">{{ $book['series'] }}</h5>
    
                        {{-- edit --}}
                        {{-- bottone con rotta che riconduce all'id della tabella dell'elemento selezionato --}}
                        <a href="{{ route('comics.edit', $book['id'] ) }}" class="btn btn-info">Modifica</a>
    
                        {{-- delete --}}
                        {{-- Inserisco nell'attributo action la rotta destroy, passando la variabile $book['id'] per cancellare l'elemento corrente --}}
                        <form action="{{ route('comics.destroy', $book['id']) }}" method="POST">
    
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="delete btn btn-danger">Cancella</button>
                        </form>
                    </div>
                @endforeach
            </div>

            <!-- load more -->
            <div class="row text-center">

                <div id="load-more">
                    <a href="{{ route('comics.create' )}}" class="text-decoration-none">
                        <span class="fw-bold fs-1 border border-2 border-white">crea il tuo fumetto!</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- cards -->
    <section id="cards">
        <div class="container">

            <!-- card -->
            @foreach($cards as $card)
                <div class="dcCard">

                    <!-- img -->
                    <div class="img">
                        <img src="{{ Vite::asset('resources/img/' . $card['url']) }}" alt="{{ $card['name']}}">
                    </div>
                    <h3>{{ $card['name'] }}</h3>
                </div>
            @endforeach
        </div>
    </section>
@endsection