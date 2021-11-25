@extends('hu.site', ['bodyClass' => 'has-hero'])

@section('title', 'Digitális termékfejlesztés startupoknak')
@section('description', 'Van egy jó ötleted és szeretnéd gyorsan és profin piacra vinni a termékedet? A Further segít a prototípusok elkészítésében és a növekedésben.')

@section('content')
    <section class="hero is-raspberry">
        <h2 class="hero-heading">
            A Te ötleted.<br />
            Megépítjük. Növeljük.<br />
            <strong class="is-tangerine">Hódítsd meg a világot.</strong>
        </h2>
        <a class="hero__cta" href="{{ localizedRoute('contact') }}">
            Kiváncsiak vagyunk az ötletedre!<strong>Meséld el nekünk</strong>
        </a>
        <a class="hero__scroll" href="{{ url('#intro') }}"></a>
    </section>

    <section class="section is-dark" id="intro">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12-tablet is-5-widescreen">
                    <h2 class="hero-heading">
                        Szükséged van egy csapatra, hogy <strong class="is-raspberry">ötletedből termék </strong> legyen?
                    </h2>
                </div>
                <div class="column is-offset-1-widescreen">
                    <p>
                        Van egy nagyszerű startup ötleted, amiről meg vagy győződve, hogy megváltoztatja a világot, de nem tudod, hogyan kezdjél neki. Esetleg hiányzik a megépítéséhez szükséges technikai tudásod?
                    </p>
                    <p>
                        Itt jövünk mi a képbe. Átvezetünk a teljes folyamaton, az ötletvalidálástól egészen a termék piacra dobásáig és a növekedésig.
                    </p>
                    <p>
                        Design sprintek keretén belül válaszokat találunk a kritikus üzleti kérdésekre, mint amilyen a piaci igények felkutatása vagy a piacra jutási stratégia. Ha ezekre a kérdésekre válaszokat kaptunk, produkciós sprintek keretén belül elkészítjük a prototípusokat, amikkel a piacot tesztelheted.
                    </p>
                    <p>
                        Természetesen mi sem érthetünk mindenhez. Egy sikeres startuphoz különböző területekről van szükség szakértőkre. Éppen azért partneri kapcsolatokat alakítottunk ki a helyi startup ökoszisztéma legjobb szakembereivel. Marketing szakértő? Service designer? Inkubátorok? Nevezd meg, mi ismerjük őket!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12-tablet is-5-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-cobalt">Design thinking</strong> mint megközelítés.
                    </h2>
                </div>
                <div class="column is-offset-1-widescreen">
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-product-development-discover-icon.png') }}" alt="Digitális termékfejlesztés - Megismerés" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Megismerés</h3>
                            <p>
                                Egy szoftvertermék fejlesztésében a legfontosabb mérföldkő a megismerés.
                            </p>
                            <p>
                                A megismerés további két szakaszra bontható: az empátia szakaszára — amikur kutatásokat végzünk, hogy jobban megismerjük a piacot és a felhasználókat — illetve a definiálás — amikor a kutatás eredményei összefoglaljuk egy értelmes és használható probléma definícióba.
                            </p>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-product-development-ideate-icon.png') }}" alt="Digitális termékfejlesztés - Ötletelés" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Ötletelés</h3>
                            <p>
                                Amikor már tudjuk milyen problémákra keresünk megoldást, elkezdhetjük ezeket a megoldásokat megtervezni.
                            </p>
                            <p>
                                Fontos, hogy egy ítéletmentes környezetet hozzunk létre. Ebben a fázisban nincsenek rossz ötletek. Sőt, általában a legvadabb ötletekből lesznek a legjobb termékek.
                            </p>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-product-development-prototype-and-test-icon.png') }}" alt="Digitális termékfejlesztés - Validáció" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Validáció</h3>
                            <p>
                                A validációs fáziban kezdünk el előszőr működhető és tapinható prototípusokat építeni, majd ezekkel visszatérni a felhasználókhoz és visszacsatolást kérni.
                            </p>
                            <p>
                                Ha a prototípusok beváltják a hozzájuk fűzött reményeket, az nagyszerű. Továbbléphetünk a következő szakaszra. Ha a felhasználói visszacsatolás viszont negatív, akkor vissza kell lépnünk az ötletelés szakaszába.
                            </p>
                            <p>
                                Ha a felhasználok által jelzett problémák gyökere sokkal mélyebbre vezethető vissza, akkor szükség esetén egészen a megismerés szakaszáig érdemes visszalépni, további kutatást végezni és újrafogalmazni a probléma definíciókat.
                            </p>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-product-development-implement-icon.png') }}" alt="Digitális termékfejlesztés - Megvalósítás" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Megvalósítás</h3>
                            <p>
                                Az alapötleteket sikerült validálni és végre gyakorlatba ültethetjük ezeket. Ez a legizgalmasabb időszak!
                            </p>
                            <p>
                                A designereink életet lehelnek a prototípusokba, míg a fejlesztő csapat kiválasztja a megfelelő architektúrát a szoftveredhez. Induljon a kódolás!
                            </p>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-product-development-evolve-icon.png') }}" alt="Digitális termékfejlesztés - Elemzés és továbbfejlesztés" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Elemzés és<br />továbbfejlesztés</h3>
                            <p>
                                Legtöbben úgy gondolnák, hogy a folyamat itt véget ér. De igazából csak itt kezdődik. Ahogy megszerezted az első felhasználóidat, elkezdünk adatokat gyűjtünk arról, hogy a felhasználók hogyan interakcionálnak a termékkel.
                            </p>
                            <p>
                                Segítünk kielemezni a visszajelzéseket és méréseket, módosítva a terméket ahol szükséges. Az egész folyamat itt újrakezdődik, ismét az empátia szakaszába lépunk.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact', [
        'buttonText' => 'Építsük meg együtt',
        'headingText' => 'Kiváncsiak vagyunk az ötletedre!'
    ])

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-tangerine">Sikertörténetek</strong> ügyfeleinktől:
                    </h2>
                </div>
            </div>
            <div class="columns has-margin-b60">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="testimonial__picture" src="{{ asset('img/testimonials-brian-dubb.png') }}" alt="Centralized Brian Dubb testimonial" />
                    <blockquote class="testimonial__content">
                        <p>A Further határidőn és költségvetésen belül fejlesztette le az MVP-t, ami sikeres béta teszteléshez, majd egy második kör befektetéshez vezetett. Örvendünk hogy az applikáció második verzióján is a Furtherrel együtt dolgozhatunk.</p>
                        <cite class="testimonial__author">DUBB Brian, Centralized</cite>
                    </blockquote>
                </div>
            </div>
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="testimonial__picture is-right-aligned" src="{{ asset('img/testimonials-attila-szegedi.png') }}" alt="Brewie Attila Szegedi testimonial" />
                    <blockquote class="testimonial__content">
                        <p>
                            A Further testreszabta a Chronos tartalommenedzsment rendszerüket, hogy megfeleljen a mi specifikus igényeinknek. Jelenleg a tudástárunk motorjaként üzemel. A rendszer tökéletesen bevált és lehetővé teszi számunkra, hogy nagymennyiségű információt tároljunk és osszunk meg a sörfőző gépunkről és a sörfőzésről.
                        </p>
                        <cite class="testimonial__author">SZEGEDI Attila, Brewie</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.projects')
@endsection



@push('structured-data')
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
            },
            {
                "@type": "ListItem",
                "position": "2",
                "item": {
                    "@id": "{{ localizedRoute('services.digital-product-development') }}",
                    "name": "Digitális termékfejlesztés"
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
    "description": "Van egy jó ötleted és szeretnéd gyorsan és profin piacra vinni a termékedet? A Further segít a prototípusok elkészítésében és a növekedésben.",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Digitális termékfejlesztés, MVP, Minimum Viable Product, MLP, Minimum Lovable Product, Startup",
    "mainEntityOfPage": "{{ localizedRoute('services.digital-product-development') }}",
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
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": "1",
            "item": {
                "@id": "{{ config('app.url') }}",
                "name": "Homepage"
            }
        },
        {
            "@type": "ListItem",
            "position": "2",
            "item": {
                "@id": "{{ localizedRoute('services.digital-product-development') }}",
                "name": "Digitális termékfejlesztés"
            }
        }
    ]
}
</script>
@endpush
