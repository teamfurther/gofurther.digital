@extends('hu.site', ['bodyClass' => 'has-hero'])

@section('content')
    <section class="hero hero--background-2 is-raspberry">
        <h2 class="hero-heading">
            Ötlettől <strong class="is-tangerine">megvalósításig</strong><br />
            és azon is túl.
        </h2>

        <a class="hero__cta" href="{{ localizedRoute('contact') }}">
            Kiváncsiak vagyunk az ötletedre!<strong>Meséld el nekünk</strong>
        </a>

        <a class="hero__scroll" href="#services"></a>
    </section>

    <section class="section has-padding-b60 has-padding-t0" id="services">
        <div class="container">
            <div class="columns">
                <div class="column is-6-tablet">
                    <div class="columns services__service" id="strategia-es-kutatas">
                        <div class="column">
                            <h2 class="heading-1 has-margin-b30 has-margin-t90">
                                Stratégia és kutatás
                            </h2>
                            <div class="services__outcome">
                                Amit kapsz → <span>Validált ötlet</span>, <span>Termékstratégia</span>
                            </div>

                            <p>Együtt elkezdjük feltérképezni a víziót. Az ötletedet problémákra és kihívásokra bontjuk, majd az egészet ismét összerakjuk egy termékstratégia formájában.</p>
                            <p class="has-margin-b60">Ennek a fázisnak a kulcsfeladata a felhasználók megismerése. Felhasználói- és panelinterjúkat végzünk, hogy validálni tudjuk a koncepciót.</p>

                            <a class="btn has-margin-b5">Discovery Workshop</a>
                            <a class="btn has-margin-b5">Design Sprint</a>
                        </div>
                    </div>
                    <div class="columns services__service" id="ux-kutatas-es-tervezes">
                        <div class="column">
                            <h2 class="heading-1 has-margin-b30 has-margin-t90">
                                UX kutatás és tervezés
                            </h2>
                            <div class="services__outcome">
                                Amit kapsz → <span>Drótvázak</span>, <span>UI designok</span>
                            </div>

                            <p>Ebben a fázisban kezdünk el előszőr működő és tapintható prototípusokat építeni, majd ezekkel visszatérni a felhasználókhoz és visszacsatolást kérni.</p>
                            <p class="has-margin-b60">Előbb drótvázakat készítünk, hogy meghatározzuk az információ hierarchiát és kapjál egy elképzelést arról, hogy miként néz majd ki a megoldás. Később ezeket a drótvázakat egy UI design folyamat során felruházzuk színekkel és interakciókkal. Végre életre kelt a projekted!</p>

                            <a class="btn has-margin-b5">UI design</a>
                        </div>
                    </div>
                    <div class="columns services__service" id="digitalis-termekfejlesztes">
                        <div class="column">
                            <h2 class="heading-1 has-margin-b30 has-margin-t90">
                                Digitális termékfejlesztés
                            </h2>
                            <div class="services__outcome">
                                Amit kapsz → <span>Prototípusok (MVP)</span>, <span>Piacképes termék</span>
                            </div>
                            <p>Ha a digitális térben él, akkor mi meg tudjuk építeni! No-code prototípustól, komplex mobil applikáción át a mesterséges intelligenciát alkalmazó IoT megoldásig mindent láttunk már.</p>
                            <p class="has-margin-b60">Agilis technikákat és tervezői gondolkodásmódot használva rövid időn belül működő megoldásokat szállítunk, amelyek lehetővé teszik számodra, hogy hamar mérhető eredményeket lássál.</p>

                            <a class="btn has-margin-b5">No-code és low-code megoldások</a>
                            <a class="btn has-margin-b5">Mobilapplikációk</a>
                            <a class="btn has-margin-b5">Webes applikációk</a>
                            <a class="btn has-margin-b5">SaaS termékek</a>
                        </div>
                    </div>
                </div>
                <div class="column is-hidden-mobile is-offset-1-tablet">
                    <div class="services__animated is-rotated-0">
                        <div class="services__animated--strategy-and-research"></div>
                        <div class="services__animated--ux-research-and-design"></div>
                        <div class="services__animated--digital-product-development"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.projects')

    <section class="section">
        <div class="container">
            <div class="columns has-margin-b60">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-tangerine">Sikertörténetek</strong> ügyfeleinktől:
                    </h2>

                    <img class="testimonial__picture" src="{{ asset('img/testimonials-brian-dubb.png') }}" alt="Centralized Brian Dubb testimonial" />
                    <blockquote class="testimonial__content">
                        <p>A Further határidőn és költségvetésen belül fejlesztette le az MVP-t, ami sikeres béta teszteléshez, majd egy második kör befektetéshez vezetett. Örvendünk hogy az applikáció második verzióján is a Furtherrel együtt dolgozhatunk.</p>
                        <cite class="testimonial__author">DUBB Brian, Centralized</cite>
                    </blockquote>
                </div>
            </div>
            <div class="columns has-margin-b90">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="testimonial__picture is-right-aligned" src="{{ asset('img/testimonials-attila-szegedi.png') }}" alt="Brewie Attila Szegedi testimonial" />
                    <blockquote class="testimonial__content">
                        <p>A Further testreszabta a Chronos tartalommenedzsment rendszerüket, hogy megfeleljen a mi specifikus igényeinknek. Jelenleg a tudástárunk motorjaként üzemel. A rendszer tökéletesen bevált és lehetővé teszi számunkra, hogy nagymennyiségű információt tároljunk és osszunk meg a sörfőző gépunkről és a sörfőzésről.</p>
                        <cite class="testimonial__author">SZEGEDI Attila, Brewie</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-form')
@endsection



@push('structured-data')
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Corporation",
    "address": {
        "@type": "PostalAddress",
        "addressCountry": "{{ config('site.company.address.country') }}",
        "addressLocality": "{{ config('site.company.address.city') }}",
        "postalCode": "{{ config('site.company.address.postal_code') }}",
        "streetAddress": "{{ config('site.company.address.street_address') }}"
    },
    "alternateName": "{{ config('site.company.name') }}",
    "description": "{{ config('site.description.' . config('app.locale')) }}",
    "email": "{{ config('site.contact.email') }}",
    "founder": "Peter Illés and Norbert Zsombori",
    "foundingDate": "2013",
    "foundingLocation": "{{ config('site.company.address.city') }}, {{ config('site.company.address.country') }}",
    "logo": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "name": "Further Digital Solutions",
    "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
    "telephone": "{{ config('site.contact.phone-1') }}",
    "url": "{{ config('app.url') }}"
}
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "alternateName": "{{ config('site.company.name') }}",
    "author": {
        "@type": "Corporation",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "{{ config('site.company.address.country') }}",
            "addressLocality": "{{ config('site.company.address.city') }}",
            "postalCode": "{{ config('site.company.address.postal_code') }}",
            "streetAddress": "{{ config('site.company.address.street_address') }}"
        },
        "alternateName": "{{ config('site.company.name') }}",
        "description": "{{ config('site.description.' . config('app.locale')) }}",
        "email": "{{ config('site.contact.email') }}",
        "founder": "Peter Illés and Norbert Zsombori",
        "foundingDate": "2013",
        "foundingLocation": "{{ config('site.company.address.city') }}, {{ config('site.company.address.country') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('img/logo.svg') }}",
            "height": "50",
            "width": "185"
        },
        "name": "Further Digital Solutions",
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    },
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": "1",
                "item": {
                    "@id": "{{ localizedRoute('home') }}",
                    "name": "Homepage"
                }
            }
        ]
    },
    "copyrightHolder": {
        "@type": "Corporation",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "{{ config('site.company.address.country') }}",
            "addressLocality": "{{ config('site.company.address.city') }}",
            "postalCode": "{{ config('site.company.address.postal_code') }}",
            "streetAddress": "{{ config('site.company.address.street_address') }}"
        },
        "alternateName": "{{ config('site.company.name') }}",
        "description": "{{ config('site.description.' . config('app.locale')) }}",
        "email": "{{ config('site.contact.email') }}",
        "founder": "Peter Illés and Norbert Zsombori",
        "foundingDate": "2013",
        "foundingLocation": "{{ config('site.company.address.city') }}, {{ config('site.company.address.country') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('img/logo.svg') }}",
            "height": "50",
            "width": "185"
        },
        "name": "Further Digital Solutions",
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    },
    "description": "{{ config('site.description.' . config('app.locale')) }}",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Digital product development, MVP development, Custom software development, Software development, Web development, UX research, UX design, UI design, Digital transformation",
    "mainEntityOfPage": "{{ localizedRoute('home') }}",
    "name": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "publisher": {
        "@type": "Corporation",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "{{ config('site.company.address.country') }}",
            "addressLocality": "{{ config('site.company.address.city') }}",
            "postalCode": "{{ config('site.company.address.postal_code') }}",
            "streetAddress": "{{ config('site.company.address.street_address') }}"
        },
        "alternateName": "{{ config('site.company.name') }}",
        "description": "{{ config('site.description.' . config('app.locale')) }}",
        "email": "{{ config('site.contact.email') }}",
        "founder": "Peter Illés and Norbert Zsombori",
        "foundingDate": "2013",
        "foundingLocation": "{{ config('site.company.address.city') }}, {{ config('site.company.address.country') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('img/logo.svg') }}",
            "height": "50",
            "width": "185"
        },
        "name": "Further Digital Solutions",
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    },
    "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
    "url": "{{ config('app.url') }}"
}
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "alternateName": "{{ config('site.company.name') }}",
    "author": {
        "@type": "Corporation",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "{{ config('site.company.address.country') }}",
            "addressLocality": "{{ config('site.company.address.city') }}",
            "postalCode": "{{ config('site.company.address.postal_code') }}",
            "streetAddress": "{{ config('site.company.address.street_address') }}"
        },
        "alternateName": "{{ config('site.company.name') }}",
        "description": "{{ config('site.description.' . config('app.locale')) }}",
        "email": "{{ config('site.contact.email') }}",
        "founder": "Peter Illés and Norbert Zsombori",
        "foundingDate": "2013",
        "foundingLocation": "{{ config('site.company.address.city') }}, {{ config('site.company.address.country') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('img/logo.svg') }}",
            "height": "50",
            "width": "185"
        },
        "name": "Further Digital Solutions",
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    },
    "copyrightHolder": {
        "@type": "Corporation",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "{{ config('site.company.address.country') }}",
            "addressLocality": "{{ config('site.company.address.city') }}",
            "postalCode": "{{ config('site.company.address.postal_code') }}",
            "streetAddress": "{{ config('site.company.address.street_address') }}"
        },
        "alternateName": "{{ config('site.company.name') }}",
        "description": "{{ config('site.description.' . config('app.locale')) }}",
        "email": "{{ config('site.contact.email') }}",
        "founder": "Peter Illés and Norbert Zsombori",
        "foundingDate": "2013",
        "foundingLocation": "{{ config('site.company.address.city') }}, {{ config('site.company.address.country') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('img/logo.svg') }}",
            "height": "50",
            "width": "185"
        },
        "name": "Further Digital Solutions",
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "https://gofurther.digital"
    },
    "creator": {
        "@type": "Organization",
        "alternateName": "{{ config('site.company.name') }}",
        "name": "Further Digital Solutions"
    },
    "description": "{{ config('site.description.' . config('app.locale')) }}",
    "image": "{{ asset('img/logo.svg') }}",
    "name": "Further Digital Solutions",
    "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
    "url": "{{ config('app.url') }}"
}
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": "1",
            "item": {
                "@id": "{{ config('app.url') }}",
                "name": "Homepage"
            }
        }
    ]
}
</script>
@endpush
