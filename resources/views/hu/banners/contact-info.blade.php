<section class="section">
    <div class="banner banner--contact">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="container">
                        <h2 class="heading-2">{{ $headingText ?? 'Elérhetőségeink' }}</h2>

                        <div class="h-card vcard">
                            <div class="p-tel tel">
                                <a href="tel:{{ str_replace(' ', '', config('site.contact.phone-1')) }}" class="value"
                                   data-gtm-click='{ "show": { "event_category": "number", "event_label": "call" } }'
                                >
                                    HU: {{ config('site.contact.phone-1') }}
                                </a>
                            </div>
                            <div class="p-tel tel">
                                <a href="tel:{{ str_replace(' ', '', config('site.contact.phone-2')) }}" class="value"
                                   data-gtm-click='{ "show": { "event_category": "number", "event_label": "call" } }'
                                >
                                    RO: {{ config('site.contact.phone-2') }}
                                </a>
                            </div>
                            <div class="u-email email">
                                <a href="mailto:{{ config('site.contact.email') }}" class="value"
                                   data-gtm-click='{ "show": { "event_category": "email", "event_label": "send" } }'
                                >
                                    {{ config('site.contact.email') }}
                                </a>
                            </div>

                            <div class="social-icons">
                                <a href="{{ config('site.social.facebook') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--facebook"></span></a>
                                <a href="{{ config('site.social.twitter') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--twitter"></span></a>
                                <a href="{{ config('site.social.linkedin') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--linkedin"></span></a>
                                <a href="{{ config('site.social.instagram') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--instagram"></span></a>
                                <a href="{{ config('site.social.github') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--github"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>