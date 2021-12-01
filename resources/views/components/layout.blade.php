<!doctype html>
@include('components.styles')
    <body>
        <section class="header">
            <h1 class="greeting">
                Bilietų pardavimas į kiną - Ugnė Glinskytė IFF-9/7
            </h1>
            <nav class="nav">
                    @auth
                            <p class="nav_header">
                                Sveikas, {{ auth()->user()->username}}!
                            </p>
                        <div class="nav_buttons">
                                <form method="POST" action="/logout" class="nav_button">
                                    @csrf
                                    <button type="submit">Atsijungti</button>
                                </form>
                            @if(auth()->user()->isAdmin == 0 && auth()->user()->isDirector == 0)
                                <form method="GET" action="/show/tickets" class="nav_button">
                                    @csrf
                                    <button type="submit">Peržiūrėti užsakytus bilietus</button>
                                </form>
                            @elseif(auth()->user()->isAdmin == 1)
                                <form method="GET" action="/create/seanse" class="nav_button">
                                    @csrf
                                    <button type="submit">Kurti seansą</button>
                                </form>
                            @elseif(auth()->user()->isDirector == 1)
                                <form method="GET" action="/show/films" class="nav_button">
                                    @csrf
                                    <button type="submit">Peržiūrėti visus filmus</button>
                                </form>
                                <form method="GET" action="/create/film" class="nav_button">
                                    @csrf
                                    <button type="submit">Pridėti naują filmą</button>
                                </form>
                            @endif
                        </div>
                    @endauth
        
                    @guest
                    <p>
                    </p>
                    <div class="nav_buttons">
                        <form method="GET" action="/login" class="nav_button">
                            @csrf
                            <button type="submit">Prisijungti</button>
                        </form>
                        <form method="GET" action="/register" class="nav_button">
                            @csrf
                            <button type="submit">Užsiregistruoti</button>
                        </form>
                </div>
                
                    @endguest
            </nav>
        </section>
        @yield('content')
    </body>
</html>