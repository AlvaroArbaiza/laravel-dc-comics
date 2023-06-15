<header>
    <div class="container">

        <!-- logo -->
        <div id="logo">
            <a href="{{ route('home') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo dc comics">
            </a>
        </div>

        {{-- crea il tuo fumetto --}}
        <div>
            <a href="{{ route('comics.create') }}" class="text-decoration-none">
                <span class="fw-bold fs-5 border border-3 border-primary text-uppercase p-2">crea il tuo fumetto!</span>
            </a>
        </div>

        {{-- navbar --}}
        <nav>
            <ul>
                @foreach($comicLinks[0]['links'] as $link)

                    {{-- se active è true --}}
                    @if(request()->url() !== route('home') && $link['url'] !== 'home')

                        {{-- se la route corrente corrisponde a $link['url'] e inizia con la route passata dalla variabile otterrà la classe 'active' --}}
                        <li class="{{ request()->url() === route('comics.index') ? 'active' : '' }}">
                            <a href="{{ route($link['url']) }}">                        
                                <span>{{ $link['name'] }}</span>
                                <hr>
                            </a>
                        </li>
                    {{-- se active è false --}}
                    @else
                        <li>
                            <a href="{{ route($link['url']) }}">                        
                                <span>{{ $link['name'] }}</span>
                                <hr>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
    
    <!-- jumbotron -->
    <section id="jumbotron">

    </section>
</header>