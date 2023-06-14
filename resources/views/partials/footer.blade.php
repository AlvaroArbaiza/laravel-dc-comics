<footer>

    <!-- links -->
    <section id="links">

        <div class="container">

            <!-- left -->
            <div class="left">

                @foreach($comics as $element)
                    <div class="lists">

                        <h3 class="fw-bold">{{ $element['id'] }}</h3>
                        <ul class="p-0 m-0">

                            @foreach($element['links'] as $link )
                                <li>
                                    @if ($link['show'] == true)                                        
                                        <a href="#">
                                            <span>
                                                {{ $link['name'] }}
                                            </span>
                                        </a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- sign and socials -->
    <section id="sign-socials">

        <div class="container">

            <!-- sign-up -->
            <div id="sign-up">
                <a href="#">sign-up now!</a>
            </div>

            <!-- socials -->
            <div id="socials">

                <!-- follow us -->
                <div id="follow-us">
                    <span>follow us</span>
                </div>

                <!-- icons -->
                <div id="icons">
                    
                    @foreach($socials as $element)
                        <a href="#">                            
                            <img src="{{ Vite::asset('resources/img/' . $element['url']) }}" alt="{{ $element['name'] }}">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</footer>