<header>
    <nav class="d-flex justify-content-between my-3">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC header">
        @php
            //approccio con array associativo
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
        <ul class="list-unstyled d-flex pt-4">
            @foreach ($headerLinks as $key => $label)
                <li class="text-uppercase px-2">
                    <a href="#" class="text-decoration-none text-dark">
                        {{ $label }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
