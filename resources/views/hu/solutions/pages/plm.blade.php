@extends('hu.site')

@section('title', 'Testreszabott termékéletciklus-menedzsment szoftver')
@section('description', 'A mérnöki tervezéstől a minőségellenőrzésig az egyedi PLM-megoldásaink segítenek az új termékeket gyorsabban piacra dobni, mint valaha.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Egyedi termékéletciklus-kezelés (PLM)</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">A mérnöki tervezéstől a minőségellenőrzésig az egyedi PLM-megoldásaink segítenek az új termékeket gyorsabban piacra dobni, mint valaha.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Minden termékinformáció egy helyen</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>Kezeld egy adott termékre vonatkozó összes információt egy integrált dokumentumközpontban. Tárold egy helyen az anyagjegyzékeket, a rajzokat, a munkalapokat és a minőségi dokumentumokat. A szoftver különböző hozzáférési szintek beállítását teszi lehetővé a különböző munkacsoportok számára, megkönnyíti a gyors kommunikációt és a jóváhagyásokat.</p>
                        <ul class="list has-bullets">
                            <li>központosított dokumentumkezelés</li>
                            <li>dokumentumverzionálás</li>
                            <li>valós idejű együttműködés</li>
                            <li>anyagjegyzék</li>
                            <li>munkalapok</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('media/solutions/plm-illustration-centralised.png') }}" alt="Minden termékinformáció egy helyen" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half-tablet is-offset-4-desktop">
                    <h3 class="heading-3">Minden partner egy helyen</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <p>Ne csak az ügyfeleid kezeld, hanem a partnereid is. A felhasználói és szerepkör-jogosultságok lehetővé teszik, hogy hozzáférést biztosíts a beszállítóknak, a gyártóknak, a szervizközpontoknak és a forgalmazóknak. Mindez lehetővé teszi, hogy az összes termékre vonatkozó adatot egy helyen tárold. Ugyanakkor elősegíti a szorosabb együttműködést és a gyorsabb választ a résztvevők között.</p>
                    <ul class="list has-bullets">
                        <li>biztosíts hozzáférést partnereidnek</li>
                        <li>küldj nekik valós idejű értesítéseket</li>
                        <li>központosított termékadatok és előzmények</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('media/solutions/plm-illustration-partners.png') }}" alt="Minden partner egy helyen" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Gyorsítsd fel a műveleteket vonalkódokkal</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>Nagy tapasztalattal rendelkezünk a szoftverfolyamatok automatizálása terén vonalkódok vagy QR-kódok segítségével. Kódokat generálhatunk bármilyen tevékenységre, mint például az átvételre, a válogatásra, a csomagolásra, a gyártásra stb. Ha ezt az <a href="{{ localizedRoute('solutions.time-tracking') }}">időkövető</a> modulunkkal integrálod, akkor akár a munkalapokat is automatizálhatod.</p>
                        <ul class="list has-bullets">
                            <li>SN-vonalkód generálása</li>
                            <li>QR-kódok generálása az időkövetéshez</li>
                            <li>használd ezeket táblagépen vagy szkenneld be a gyártási csarnokban</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('media/solutions/plm-illustration-barcodes.png') }}" alt="Gyorsítsd fel a műveleteket vonalkódokkal" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact', [
        'buttonText' => 'Kérj egy bemutatót',
        'headingText' => 'Szeretnél többet megtudni PLM megoldásainkról?'
    ])

    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Funkcionalitások, amelyeket már megvalósítottunk ügyfeleink számára</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <ul class="list has-bullets has-two-columns has-margin-b60">
                            <li>dokumentumkezelés és dokumentumverzionálás</li>
                            <li>vonalkód és QR-kód generálása</li>
                            <li>személyre szabott jelentések</li>
                            <li>felhasználói és szerepkör-menedzsment</li>
                            <li>e-mailek és push-értesítések</li>
                        </ul>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Használd együtt további megoldásainkkal</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="solution__nav solution__nav--sales-operations">
                            <nav class="solution__nav__items">
                                <a href="{{ localizedRoute('solutions.crm') }}">CRM</a>
                                <a href="{{ localizedRoute('solutions.sales') }}">Értékesítés</a>
                                <a href="{{ localizedRoute('solutions.purchase') }}">Vásárlás és leltározás</a>
                                <a href="{{ localizedRoute('solutions.time-tracking') }}">Időkövetés</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.custom-development-vs-out-of-the-box-software')
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
                    "@id": "{{ localizedRoute('solutions.plm') }}",
                    "name": "Testreszabott termékéletciklus-menedzsment szoftver"
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
    "description": "A mérnöki tervezéstől a minőségellenőrzésig az egyedi PLM-megoldásaink segítenek az új termékeket gyorsabban piacra dobni, mint valaha.",
    "headline": "Testreszabott termékéletciklus-menedzsment szoftver",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Termékéletciklus-menedzsment, PLM",
    "mainEntityOfPage": "{{ localizedRoute('solutions.plm') }}",
    "name": "Testreszabott termékéletciklus-menedzsment szoftver",
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
                "@id": "{{ localizedRoute('solutions.plm') }}",
                "name": "Testreszabott termékéletciklus-menedzsment szoftver"
            }
        }
    ]
}
</script>
@endpush
