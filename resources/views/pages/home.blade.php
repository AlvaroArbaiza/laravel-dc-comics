@extends('layout.app')

{{-- Head | title --}}
@section('title')
    Laravel DC Comics | Home
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
            @foreach($comicBooks as $index => $book)
                <div class="series">

                    {{-- img --}}
                    <a href="{{ route('comics' , ['index' => $index]) }}">
                        <img src="{{ $book['thumb'] }}" alt="{{ $book['series'] }}">
                    </a>

                    {{-- title --}}
                    <h5>{{ $book['series'] }}</h5>
                </div>
            @endforeach

            <!-- load more -->
            <div id="load-more">
                <span>load more</span>
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