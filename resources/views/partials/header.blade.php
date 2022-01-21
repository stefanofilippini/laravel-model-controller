<div class="container">
    <header class="d-flex align-items-center">
        <a href="/">
            <img src="" alt="LOGO">
        </a>
        
        <nav>
            <ul class="d-flex align-items-center m-0">
                <li class="list-inline-item">
                    <a href="{{ route('home') }}"
                        @if (Request::route()->getName() === 'home') class="active" @endif>
                        Home
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('movies') }}"
                        @if (Request::route()->getName() === 'movies') class="active" @endif>
                        Movies
                    </a>
                </li>
            </ul>
        </nav>
    </header>
</div>