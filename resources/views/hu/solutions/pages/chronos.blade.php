@extends('hu.site')

@section('title', 'Chronos CMS')
@section('description', 'Elegáns, reszponzív, gyors és kereső-optimizált (SEO) honlapokat készíthetünk saját tartalomkezelő rendszerünkkel (CMS), a Chronos segítségével.')

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
                        <h1 class="heading">Egyedi honlapok a Chronos segítségével</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">Elegáns, reszponzív, gyors és kereső-optimizált (SEO) honlapokat készíthetünk saját tartalomkezelő rendszerünkkel (CMS), a Chronos segítségével.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet">
                        <h3 class="heading-3">Nincs szükség technikai ismeretekre</h3>
                        <p>Minden oldal alapvetően egy sablon. Egy egyszerű és intuitív kezelőfelületet biztosítunk a tartalom kezeléséhez. Töltsd fel a tartalmat és a képeket, és figyeld meg hogyan kel életre létre a honlapod.</p>
                        <ul class="list has-bullets">
                            <li>hozz létre tartalmat egy egyszerű Markdown szerkesztővel</li>
                            <li>alapból kereső-optimalizált (SEO)</li>
                            <li>töltsd fel a képeket egy médiakönyvtárba, így később újra felhasználhatod őket</li>
                            <li>tölts fel bármilyen méretű képet, és hagyd, hogy a Chronos menet közben hozza létre a bélyegképeket</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('media/solutions/web-illustration-build-websites.png') }}" alt="Kezeld a tartalmat egy intuitív grafikus felületen" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half">
                    <h3 class="heading-3">Elemezd az eredményeket</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-half-tablet">
                    <p>A Chronos megkönnyíti a kattintási és konverziós arányok elemzését. Optimalizálhatod a weboldalaidat egy bizonyos célcsoportra vagy hozz létre A / B teszteket annak érdekében, hogy meghatározd a legeredményesebb marketing módszert.</p>
                    <ul class="list has-bullets">
                        <li>kövesd nyomon a kattintási arányokat</li>
                        <li>kövesd nyomon a konverziós arányokat</li>
                        <li>A/B tesztek</li>
                        <li>többváltozós tesztek</li>
                    </ul>
                </div>
                <div class="column is-half-tablet">
                    <img class="is-centered-mobile" src="{{ asset('media/solutions/web-illustration-analytics.png') }}" alt="Kövesd nyomon a kattintási és konverziós arányokat" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-half-tablet">
                    <h3 class="heading-3">Alapértelmezetten többnyelvű</h3>
                    <p>A Chronos lehetővé teszi, hogy annyi nyelvet adjál hozzá a honlapodhoz, amennyit csak szeretnél. Egy új nyelv hozzáadása nagyon egyszerű, csak jelölj be egy jelölőnégyzetet a beállításokban, és a rendszer készen is áll a tartalom feltöltésére. Wunderbar!</p>
                    <ul class="list has-bullets">
                        <li>adjál hozzá új nyelveket néhány kattintással</li>
                        <li>fordítsd le a tartalmat és a statikus szövegeket</li>
                        <li>kövesd nyomon a lefordítatlan tartalmat</li>
                    </ul>
                </div>
                <div class="column is-half-tablet">
                    <img class="is-centered-mobile is-pulled-right" src="{{ asset('media/solutions/web-illustration-multilingual.png') }}" alt="Alapértelmezetten többnyelvű" />
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column is-offset-half">
                        <h3 class="heading-3">Leválasztott architektúra</h3>
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-half-tablet">
                        <p>A Chronos úgynevezett szétcsatolt vagy leválasztot tartalomkezelő rendszer (CMS). A Chronos alapvetően csupán egy backend-rendszer, amely a tartalmat egy alkalmazásprogramozási felületen (API-n) keresztül teszi hozzáférhetővé. Ez azt jelenti, hogy teljesen frontend agnosztikus, amelynek számos előnye van: bármilyen programozási nyelvet használhatsz a frontend létrehozásához, vagy akár a statikus oldalak generálásához. Ezt könnyedén csatlakoztathatod más honlapokhoz vagy egy mobilalkalmazáshoz.</p>
                        <ul class="list has-bullets">
                            <li>használj bármilyen programozási nyelvet a frontenden</li>
                            <li>generálj statikus weboldalakat</li>
                            <li>csatlakozz más honlapokhoz vagy alkalmazásokhoz</li>
                            <li>jól dokumentált API</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile" src="{{ asset('media/solutions/web-illustration-headless.png') }}" alt="Leválasztott architektúra" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact', [
        'buttonText' => 'Kérj egy bemutatót',
        'headingText' => 'Szeretnél többet megtudni a Chronosról?'
    ])
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
                    "@id": "{{ localizedRoute('solutions.chronos') }}",
                    "name": "Chronos CMS"
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
    "description": "Elegáns, reszponzív, gyors és kereső-optimizált (SEO) honlapokat készíthetünk saját tartalomkezelő rendszerünkkel (CMS), a Chronos segítségével.",
    "headline": "Chronos CMS",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Chronos, CMS, Chronos CMS",
    "mainEntityOfPage": "{{ localizedRoute('solutions.chronos') }}",
    "name": "Chronos CMS",
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
                "@id": "{{ localizedRoute('solutions.chronos') }}",
                "name": "Chronos CMS"
            }
        }
    ]
}
</script>
@endpush
