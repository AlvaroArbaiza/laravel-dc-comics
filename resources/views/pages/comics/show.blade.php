@extends('layout.app')

{{-- Head | title --}}
@section('title')
    Laravel DC Comics | Comic Book
@endsection

{{-- Main Content --}}
@section('content')

    {{-- bg-blue --}}
    <div class="bg-blue position-relative">
        <div class="container">
            <div class="img position-absolute">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
        </div>
    </div>

    {{-- comic --}}
    <section class="comic container d-flex">

        {{-- comicbook --}}
        <div class="comicbook d-flex flex-column pe-5">

            {{-- title --}}
            <h4 class="text-uppercase fw-bold">{{ $comic['title'] }}</h4>

            {{-- info --}}
            <div class="info d-flex mb-2">

                {{-- price --}}
                <div class="price d-flex justify-content-between border-bottom border-end border-2 border-black py-2 px-3 fw-bold">
                    <span class="left text-white-50">
                        U.S. Price:
                        <span class="text-white">
                            {{ $comic['price'] }}
                        </span>
                    </span>

                    <span class="text-uppercase right text-white-50">
                        available
                    </span>
                    
                </div>
                
                {{-- availability --}}
                <div class="available border-bottom border-2 border-black py-2 px-3 text-center text-white fw-bold">
                    <span>
                        Check Availability
                        <i class="bi bi-caret-down-fill align-middle"></i>
                    </span>
                </div>
            </div>

            {{-- description --}}
            <div class="description">
                <p>
                    {{ $comic['description'] }}
                </p>
            </div>
        </div>

        {{-- advertisign --}}
        <div class="advert d-flex flex-column">

            {{-- title --}}
            <span class="text-uppercase text-end fw-bold mb-1">
                advertisement
            </span>

            {{-- img --}}
            <img src="https://i.pinimg.com/originals/d8/61/0e/d8610e3372fc1173de56a8a3d6abd85f.jpg" alt="advertising">

        </div>
    </section>

    {{-- details --}}
    <section class="details pt-4 border-top border-light-subtle border-2">
        <div class="container d-flex">

            {{-- talent --}}
            <div class="talent w-50 d-flex flex-column pe-5">

                {{-- title --}}
                <h5 class="fw-bold mb-4">Talent</h5>

                {{-- art by --}}
                <div class="border-top border-bottom border-2 border-light-subtle py-2 d-flex justify-content-between">
                    <h6 class="w-25">Art by:</h6>

                    {{-- artists --}}
                    <p class="w-75">
                       {{ $comic['artists']}}
                    </p>
                </div>

                {{-- written by --}}
                <div class="border-bottom border-light-subtle border-2 py-2 d-flex justify-content-between">
                    <h6 class="w-25">Written by:</h6>

                    {{-- writers --}}
                    <p class="w-75">
                       {{ $comic['writers'] }}
                    </p>
                </div>
                
            </div>

            {{-- specs --}}
            <div class="specs w-50 d-flex flex-column">

                {{-- title --}}
                <h5 class="fw-bold mb-4">Specs</h5>

                {{-- series --}}
                <div class="border-top border-bottom border-2 border-light-subtle py-2 d-flex justify-content-between">
                    <h6>Series:</h6>
                    <span>
                        {{ $comic['series']}}
                    </span>
                </div>

                {{-- price --}}
                <div class="py-2 d-flex justify-content-between">
                    <h6>U.S. Price:</h6>
                    <span class="text-dark">
                        {{ $comic['price']}}
                    </span>
                </div>

                {{-- on sale date --}}
                <div class="border-top border-bottom border-2 border-light-subtle py-2 d-flex justify-content-between">
                    <h6>On Sale Date:</h6>
                    <span class="text-dark">
                        {{ $comic['sale_date']}}
                    </span>
                </div>
            </div>
        </div>
    </section>

    {{-- card icon --}}
    <section class="card-icon border-top border-light-subtle border-2">
        <div class="container">

            <!-- card -->
            @foreach($cards as $card)
                <div class="dcCard border border-light-subtle border-2">

                    <h3 class="fw-bold">{{ $card['name'] }}</h3>

                    <!-- img -->
                    <div class="img">
                        <img src="{{ Vite::asset('resources/img/' . $card['url']) }}" alt="{{ $card['name']}}">
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection