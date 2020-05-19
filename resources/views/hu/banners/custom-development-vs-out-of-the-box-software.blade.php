<section class="section">
    <div class="banner">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="container">
                        <div class="heading-2">{{ $headingText ?? 'Miért válassz testreszabott megoldást?' }}</div>
                        <a class="btn is-large is-pearl" href="{{ localizedRoute('blog.show', ['slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver']) }}">
                            {{ $buttonText ?? 'Tudd meg itt' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>