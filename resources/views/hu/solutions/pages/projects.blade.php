@extends('hu.site')

@section('title', 'Egyedi projektmenedzsment szoftver')
@section('description', 'Szervezd, tervezzdés elemezd projektjeid a saját fejlesztésű projektmenedzsment megoldásainkkal.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Testreszabott PM-szoftver</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">Szervezd, tervezzdés elemezd projektjeid a saját fejlesztésű projektmenedzsment megoldásainkkal.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Ütemezd és tervezd tevékenységeid egy pillanat alatt</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet">
                        <p>Mielőtt elkezdjük a szoftverfejlesztést, egy részletes elemzési folyamatot végzünk azért, hogy megértsük a vállalkozásod, a munkafolyamataid és a résztvevők természetét. Ez lehetővé teszi számunkra, hogy megtaláljuk az adatok optimális megjelenítési módját, megkönnyítve a gyors hozzáférést az aktuális állapothoz, a sürgős ügyekhez, a határidőkhöz és a felelősökhöz.</p>
                        <ul class="list has-bullets">
                            <li>hozz létre feladatokat és rendelj hozzá felelőst, egyszerűen és gyorsan</li>
                            <li>jelenítsd meg vizuálisan adataid Kanban táblákon vagy egy naptárban</li>
                            <li>kövesd a haladást GANTT-diagramon vagy burndown chartokon (napi eredménykimutatásokon)</li>
                            <li>frissítsd egyszerűen az állapotokat, a határidőket és a felelősöket</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('media/solutions/projects-illustration-boards.png') }}" alt="Ütemezd és tervezd tevékenységeit egy pillanat alatt" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <h3 class="heading-3">Beszéljd meg a feladatokat és ossz meg fájlokat</h3>
                    <p>Működj együtt a feladatokon jegyzetek hozzáadásával és dokumentumok megosztásával annak érdekében, hogy mindig naprakész legyél! Kövesd az aktivitást az adott projekten vagy idővonalakon. A még nagyobb rugalmasság érdekében használd a PM-szoftvert <a href={{ localizedRoute('solutions.communication') }}>kommunikációs modulunkkal</a> vagy <a href={{ localizedRoute('solutions.dms') }}>dokumentumkezelő rendszerünkkel</a> együtt.</p>
                    <ul class="list has-bullets">
                        <li>készíts gyorsan jegyzeteket</li>
                        <li>egyszerű és gyors fájlmegosztás</li>
                        <li>e-mailek és push-értesítések</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('media/solutions/projects-illustration-discuss-share.png') }}" alt="Beszéld meg a feladatokat és ossz meg fájlokat" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Tervezz előre az erőforrások beosztásával</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet">
                        <p>Segíthetünk a következő projektek pontosabb felmérésében, olyan adatok elemzésével, mint amilyen a múltbeli projektek valós munkaidő-kimutatása, vagy az erőforrások rendelkezésre állása (pl. az alkalmazottak szabadsága). A legjobb eredmények érdekében használd együtt az <a href={{ localizedRoute('solutions.time-tracking') }}>időkövetési</a> és a <a href={{ localizedRoute('solutions.hr') }}>humán erőforrások</a> moduljainkkal.</p>
                        <ul class="list has-bullets">
                            <li>készítsd becsléseket a korábbi projektek és munkaidő-kimutatások alapján</li>
                            <li>kapj pontos erőforrás előrejelzéseket</li>
                            <li>jelenítsd meg vizuálisan a jelenlegi haladást és a felmért határidőket</li>
                            <li>kapj riasztásokat, amikor a projektek nem az ütemezés szerint haladnak</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('media/solutions/projects-illustration-forecast.png') }}" alt="Tervezz előre az erőforrások beosztásával" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact', [
        'buttonText' => 'Kérj egy bemutatót',
        'headingText' => 'Szeretnél többet megtudni projektmenedzsment megoldásainkról?'
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
                            <li>vizuális projektmegjelenítés és grafikonok</li>
                            <li>feladatkezelés</li>
                            <li>tevékenységi idővonalak</li>
                            <li>fájlmegosztás</li>
                            <li>e-mailek és push-értesítések</li>
                            <li>személyre szabott jelentések</li>
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
                                <a href="{{ localizedRoute('solutions.communication') }}">Kommunikáció</a>
                                <a href="{{ localizedRoute('solutions.time-tracking') }}">Időkövetés</a>
                                <a href="{{ localizedRoute('solutions.hr') }}">Humán erőforrások</a>
                                <a href="{{ localizedRoute('solutions.dms') }}">Dokumentumkezelés</a>
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
                    "@id": "{{ localizedRoute('solutions.projects') }}",
                    "name": "Egyedi projektmenedzsment szoftver"
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
    "description": "Szervezd, tervezzdés elemezd projektjeid a saját fejlesztésű projektmenedzsment megoldásainkkal.",
    "headline": "Egyedi projektmenedzsment szoftver",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Projektmenedzsment, PM szoftver",
    "mainEntityOfPage": "{{ localizedRoute('solutions.projects') }}",
    "name": "Egyedi projektmenedzsment szoftver",
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
                "@id": "{{ localizedRoute('solutions.projects') }}",
                "name": "Egyedi projektmenedzsment szoftver"
            }
        }
    ]
}
</script>
@endpush
