@include('frames.header') <!-- head -->
<body>
    @include('frames.navbar') <!-- navbar desktop/mobile -->

    <section class="nav_filter">
        <ul class="list_filters">
            <li class="item_filter"><a href="{{ route('wines.index') }}" class="item_filter">Tutti</a></li>
            <li class="item_filter"><a href="{{ route('wines.filter', ['type' => 'bianco']) }}" class="item_filter">Bianco</a></li>
            <li class="item_filter"><a href="{{ route('wines.filter', ['type' => 'rosso']) }}" class="item_filter">Rosso</a></li>
            <li class="item_filter"><a href="{{ route('wines.filter', ['type' => 'spumante']) }}" class="item_filter">Spumante</a></li>
        </ul>
    </section>

    <main class="main_wine">
        <section class="wine_main">
            @foreach($winetabs as $winetab)
                <div class="box_wine">
                    <div class="image_body">
                        <a href="{{ route('wine.show', $winetab->id) }}">
                            <div class="image_wine" style="background-image: url('{{ asset($winetab->image_path) }}');"></div>
                        </a>
                    </div>
                    <div class="wine_name">
                        <h2>{{ $winetab->title }}</h2>
                    </div>
                </div>
            @endforeach
        </section>
    </main>

    @include('frames.footer') <!-- footer -->
</body>

