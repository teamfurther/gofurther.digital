<section class="section">
    <div class="banner">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="container">
                        <div class="heading-2">
                            {{ $headingText ?? 'Want to discuss an idea us or just say hi?' }}
                        </div>
                        <a class="btn is-large is-pearl" href="{{ localizedRoute('contact') }}"
                           data-gtm-click='{ "click": { "event_category": "contact", "event_label": "click" } }'
                        >
                            {{ $buttonText ?? 'Get in touch now' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>