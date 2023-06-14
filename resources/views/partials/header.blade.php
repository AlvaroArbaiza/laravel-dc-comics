<header>
    <div class="container">

        <!-- logo -->
        <div id="logo">
            <a href="{{ route('home') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo dc comics">
            </a>
        </div>

        {{-- navbar --}}
        <nav>
            <ul>
                @foreach($comics[0]['links'] as $link)

                    {{-- se active è true --}}
                    @if($link['active'])

                        {{-- se la route corrente corrisponde a $link['url'] e inizia con la route passata dalla variabile otterrà la classe 'active' --}}
                        <li class="{{ Str::startsWith(request()->url(), route($link['url'])) ? 'active' : '' }}">
                            <a href="{{ route($link['url']) }}">                        
                                <span>{{ $link['name'] }}</span>
                                <hr>
                            </a>
                        </li>
                    {{-- se active è false --}}
                    @else
                        <li>
                            <a href="#">                        
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