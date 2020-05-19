<section class="section">
    <div class="banner">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="container">
                        <div class="heading-2">
                            {{ $headingText ?? 'Van egy ötleted, amit meg szeretnél velünk beszélni?' }}
                        </div>
                        <a class="btn is-large is-pearl" href="{{ localizedRoute('contact') }}">
                            {{ $buttonText ?? 'Írd meg nekünk' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>