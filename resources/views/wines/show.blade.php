
@include('frames.header') <!-- head -->
<link rel="stylesheet" href="{{ asset('css/wine_page.css') }}">
<body>
    @include('frames.navbar') <!-- navbar desktop/mobile -->
    <div class="wine-details">
        <div class="wine_name_page">
            <h2>{{ $wine->title }}</h2>
        </div>
        <div class="wine_page_main">
            <div class="image_wine_page" style="background-image: url('{{ asset($wine->image_path) }}');"></div>
            <div class="wine_page_info">
                <div class="wine_info_item">
                    <h3>Prezzo: &nbsp</h3>
                    <p>{{ $wine->price }} €</p>
                </div>
                <div class="wine_info_item">
                    <h3>Anno: &nbsp</h3>
                    <p>{{ $wine->year }}</p>
                </div>
                <div class="wine_info_item">
                    <h3>Denominazione: &nbsp</h3>
                    <p>{{ $wine->Denom }}</p>
                </div>
                <div class="wine_info_item">
                    <h3>Uve: &nbsp</h3>
                    <p>{{ $wine->grapes }}</p>
                </div>
                <div class="wine_info_item">
                    <h3>Alcool: &nbsp</h3>
                    <p>{{ $wine->Alcool }} %</p>
                </div>
                <div class="wine_info_item">
                    <h3>Formato: &nbsp</h3>
                    <p>{{ $wine->Cl }} L</p>
                </div>
            </div>
        </div>
        <div class="wine_page_main_2">
            <div class="wine_info_item_text">
                <h3>Descrizione: </h3>
                <p> &nbsp{{ $wine->description }}</p>
                <h3>Abbinamenti: </h3>
                <p> &nbsp{{ $wine->food }}</p>
            </div>
        </div>
    </div>
    @include('frames.footer') <!-- footer -->
</body>

