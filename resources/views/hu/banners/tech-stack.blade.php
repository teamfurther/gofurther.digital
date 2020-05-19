<section class="section">
    <div class="banner">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="container">
                        <div class="heading-2">
                            {{ $headingText ?? 'Tudj meg többet az általunk használt technológiákról' }}
                        </div>
                        <a class="btn is-large is-pearl" href="{{ localizedRoute('tech-stack') }}">
                            {{ $buttonText ?? 'Eszköztár' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>