<header>
    <nav>
        logo DC e link pagina
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC header">
        @php
            $headerLinks = [
                'characters' => 'Characters',
                'comics' => 'Comics',
                'movies' => 'Movies',
                'tv' => 'TV',
                'games' => 'Games',
                'collectibles' => 'Collectibles',
                'videos' => 'Videos',
                'fans' => 'Fans',
                'news' => 'News',
                'shop' => 'Shop',
            ];
        @endphp
        <ul>
            @foreach ($headerLinks as $key => $label)
                <li class="text-uppercase">{{ $label }}</li>
            @endforeach
        </ul>
    </nav>
</header>
