@extends('hu.site')

@section('title', 'Online áruház a Chronos segítségével')
@section('description', 'A Chronos, a házon belüli tartalomkezelő rendszerünk (CMS) segítségével korszerű és nagy teljesítményű webáruházakat hozhatunk létre rekordidőben.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column has-text-centered">
                        <img class="has-margin-b60" src="{{ asset('img/logo-chronos.svg') }}" alt="Chronos CMS" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Egyedi e-kereskedelmi megoldások</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">A Chronos, a házon belüli tartalomkezelő rendszerünk (CMS) segítségével korszerű és nagy teljesítményű webáruházakat hozhatunk létre rekordidőben.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <h3 class="heading-3">Hozz létre elegáns termékoldalakat</h3>
                        <p>Könnyedén létrehozhatsz új termékoldalakat, és személyre szabhatod a megmutatott információt az elegáns sablonok segítségével. Adjál hozzá termékváltozatokat olyan attribútumok alapján, mint például a szín, a méret vagy bármilyen más egyéni attribútum, amire szükséged van.</p>
                        <ul class="list has-bullets">
                            <li>válassz több testreszabható sablon közül</li>
                            <li>hozz létre termékváltozatokat</li>
                            <li>adjál hozzá egyéni termék-attribútumokat</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/ecommerce-illustration-product-pages.png') }}" alt="Hozz létre elegáns termékoldalakat" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half-tablet is-offset-4-desktop">
                    <h3 class="heading-3">Használj dinamikus árképzést a bevétel növelése érdekében</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <p>A dinamikus árképzés lehetővé teszi, hogy a megrendelt mennyiség alapján állapítsd meg a termékek árszintjét. Szükség esetén hozzáadhatjuk az ajánlatok, az utalványok, a termékcsomagok vagy az ajándéktárgyak létrehozásának lehetőségét.</p>
                    <ul class="list has-bullets">
                        <li>adjál hozzá többszintű termékárat</li>
                        <li>hozz létre promóciós kampányokat és ajánlatokat</li>
                        <li>küldj utalványokat és kuponokat</li>
                        <li>csomagold együtt a termékeket</li>
                        <li>adjál ajándéktermékeket vevőinek</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/ecommerce-illustration-dynamic-pricing.png') }}" alt="Használj dinamikus árképzést a bevétel növelése érdekében" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <h3 class="heading-3">Növeld eladásaidat</h3>
                        <p>Növeld az átlagos kosárértéked azáltal, hogy kihasználod az optimalizált marketing lehetőségeket, mint például a kosár helyreállítását, a keresztértékesítést és a felülértékesítést a termékoldalakon, a kosárban vagy a vásárlás visszaigazolásánál. A webáruházat úgy konfigurálhatjuk, hogy automatikusan hasonló termékeket vagy kiegészítőket ajánljon.</p>
                        <ul class="list has-bullets">
                            <li>elhagyott kosár emlékeztetők</li>
                            <li>termékek keresztértékesítése</li>
                            <li>tételek felülértékesítése</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/ecommerce-illustration-boost-sales.png') }}" alt="Növeld eladásaidat kereszt- és felülértékesítéssel" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half-tablet is-offset-4-desktop">
                    <h3 class="heading-3">Integráld harmadik felek fizetési szolgáltatásaival</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <p>Annak érdekében, hogy megkönnyítsd a kifizetést az ügyfelek számára, hitelkártyás fizetéseket is létrehozhatunk olyan szolgáltatások segítségével, mint a Stripe, a Braintree, az Authorize.net, a Barion vagy az OTP. Az online fizetési szolgáltatások átirányítják ügyfeleit a honlapján egy egyéni köszönet oldalra annak érdekében, hogy nyomon követhesse a konverziós arányokat.</p>
                    <ul class="list has-bullets">
                        <li>integráld a nemzetközi online fizetési szolgáltatásokat (Stripe, Braintree stb.)</li>
                        <li>integráld helyi online fizetési szolgáltatásokat (Barion, OTP stb.)</li>
                        <li>kövesd nyomon a konverziót egy köszönet oldalon</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/ecommerce-illustration-payment-gateways.png') }}" alt="Integráld harmadik felek fizetési szolgáltatásait" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Küld el bárhova a termékeket</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>A megrendelés teljesítését is könnyűvé tesszük. Nyomtasd ki a kiszállítási címkéket egyetlen kattintással, közvetlenül a bolt adminisztrációs felületéről. Az összes nagyobb futártársaság szolgáltatását integrálhatjuk, mint például a DHL, a UPS, a FedEx, a DPD, a GLS vagy a Fan Courier, annak érdekében, hogy a csomagkövetést megkönnyítsük.</p>
                        <ul class="list has-bullets">
                            <li>nyomtasd ki a kiszállítási címkéket közvetlenül a webáruházból</li>
                            <li>kövesd nyomon a kiszállítást a webáruházból</li>
                            <li>integráld a DHL, az UPS, a FedEx, a DPD, a GLS, a Fan Courier szolgáltatásait</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/ecommerce-illustration-shipping.png') }}" alt="Küld el bárhova a termékeket" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution__cta">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-2">Szeretnél többet megtudni e-commerce megoldásainkról?</div>
                        <a class="btn is-large is-pearl" href="{{ url('#contact') }}">Kérjél egy bemutatót</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



@push('structured-data')
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
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
        "description": "{{ config('site.description.' . getLang()) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
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
                    "name": "Főoldal"
                }
            },
            {
                "@type": "ListItem",
                "position": "2",
                "item": {
                    "@id": "{{ localizedRoute('solutions') }}",
                    "name": "Megoldásaink"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('solutions.ecommerce') }}",
                    "name": "Online áruház a Chronos segítségével"
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
        "description": "{{ config('site.description.' . getLang()) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    },
    "description": "Attach documents to anything, from people to projects or products, with our custom document management solutions.",
    "headline": "Online áruház a Chronos segítségével",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "E-Commerce, E-Kereskedelem, Webáruház, Chronos CMS",
    "mainEntityOfPage": "{{ localizedRoute('solutions.ecommerce') }}",
    "name": "Online áruház a Chronos segítségével",
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
        "description": "{{ config('site.description.' . getLang()) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    }
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
                "@id": "{{ localizedRoute('home') }}",
                "name": "Főoldal"
            }
        },
        {
            "@type": "ListItem",
            "position": "2",
            "item": {
                "@id": "{{ localizedRoute('solutions') }}",
                "name": "Megoldásaink"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('solutions.ecommerce') }}",
                "name": "Online áruház a Chronos segítségével"
            }
        }
    ]
}
</script>
@endpush
