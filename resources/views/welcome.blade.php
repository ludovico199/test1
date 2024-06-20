@include('frames.header') <!-- Include l'header -->

    @include('frames.navbar') <!-- navbar desktop/mobile -->
    <main>
        @include('frames.counter') <!-- contatore sughero -->
        <section class="why_counter_background">
            <div class="why_counter">
                <h1 class="title">Cos'è?</h1>
                <p class="description">
                    Raccogliere i tappi di plastica e di sughero significa proteggere l'ambiente e ridurre l'inquinamento grazie al riciclo delle materie ad opera di imprese specializzate.
                    Il materiale ottenuto dal processo di lavorazione dei tappi di plastica, una miscela di polietilene e polipropilene riciclabile molte volte, è utilizzato per produrre oggetti molto utili quali cassette per frutta e verdura, bancali per trasporto di oggetti vari, paraurti per autoveicoli e soprattutto materiali per l'edilizia, tra cui le famose reti di plastica arancioni che vediamo in tutti i cantieri e i pannelli isolanti utilizzati nella bio-edilizia.
                </p>
            </div>
        </section>
        <section class="second_page">
            <div class="main_nav">
                <div class="nav_item">
                    <img src="images/degustazione.png" alt="Degustazione" class="nav_image">
                    <div class="overlay">
                        <a href="#events">EVENTI</a>
                        <div class="text_school_tasting">DEGUSTAZIONE</div>
                    </div>
                </div>
                <div class="nav_item">
                    <img src="images/vinogame.png" alt="Vinogame" class="nav_image">
                    <div class="overlay">
                        <div class="text_school_vinogame">VINOGAME</div>
                    </div>
                </div>
                <div class="nav_item">
                    <img src="images/scuola.png" alt="Sughero School" class="nav_image">
                    <div class="overlay">
                        <div class="text_school_school">SUGHERO SCHOOL</div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('frames.footer') <!-- footer -->
</body>
</html>
