@extends('hu.site')

@section('title', 'Testreszabott dokumentumkezelő rendszerek')
@section('description', 'Testreszabott dokumentumkezelő megoldásunkkal bármihez csatolhat dokumentumokat, emberektől projektekig vagy termékekig.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Egyedi dokumentumkezelés</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">Testreszabott dokumentumkezelő megoldásunkkal bármihez csatolhat dokumentumokat, emberektől projektekig vagy termékekig.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Tárolja a fájlokat a felhőben vagy helyben</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>Az Ön igényeinek megfelelően konfigurálhatjuk a tárolást a fizikai szervereken az Ön által kiválasztott helyen, vagy kihasználhatjuk a felhőalapú tárolás előnyeit. Tapasztalataink vannak a legfontosabb felhőmegőrző szolgáltatókkal, mint a Google Drive, a OneDrive, a Dropbox, az Amazon AWS S3 vagy a Box.</p>
                        <ul class="list has-bullets">
                            <li>tárolás saját üzemeltetésű szervereken</li>
                            <li>vagy felhőben</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/dms-illustration-cloud.png') }}" alt="Tárolja a fájlokat a felhőben vagy helyben" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <h3 class="heading-3">Töltsön fel dokumentumokat több forrásból</h3>
                    <p>A DMS-be való fájlfeltöltés legegyszerűbb formája a saját számítógépéről való importálás. Az Ön igényeinek megfelelően felhőalapú szolgáltatásokkal is össze tudjuk kötni, mint például a Microsoft Office 365 vagy a Google Docs.</p>
                    <ul class="list has-bullets">
                        <li>nagy mennyiségű fájlfeltöltés</li>
                        <li>csatlakozzon az Office 365-höz vagy a Google Docs-hoz</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/dms-illustration-sources.png') }}" alt="Töltsön fel dokumentumokat Office 365-ből vagy Google Docsból" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <h3 class="heading-3">Dokumentumgenerálás egyetlen kattintással</h3>
                        <p>Kihasználhatja a testreszabható sablonok előnyeit a munkadokumentumok létrehozásában, ha  más megoldásainkkal is csatlakoztatja. Például rendeléseket és szerződéseket hozhat létre az árajánlatokból, amelyeket később számlákká alakíthat át.</p>
                        <ul class="list has-bullets">
                            <li>testreszabható sablonok</li>
                            <li>dokumentumgenerálás egyetlen kattintással</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/dms-illustration-document-generation.png') }}" alt="Dokumentumgenerálás egyetlen kattintással" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <h3 class="heading-3">Beszéljék meg a dokumentumokat és működjenek együtt</h3>
                    <p>Ha úgy dönt, hogy integrálja a <a href="{{ localizedRoute('solutions.communication') }}">kommunikációs modulunkat</a>is, akkor lehetősége lesz a dokumentumokkal kapcsolatos ötleteket megosztani és megvitatni. Kapjon értesítést minden egyes alkalommal, amikor valaki módosítást hajt végre, új üzenetet ad hozzá a dokumentumhoz vagy megemlíti Önt, vagy nézze meg a beszélgetés előzményeit a dokumentum hírfolyamán.</p>
                    <ul class="list has-bullets">
                        <li>beszélje és ossza meg ötleteit</li>
                        <li>kapjon értesítést a dokumentumon végrehajtott tevékenységekről</li>
                        <li>üzenetek hírfolyama az adott dokumentumra</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/dms-illustration-discuss-collaborate.png') }}" alt="Beszéljék meg a dokumentumokat és működjenek együtt" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution__cta">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-2">Szeretne megtudni többet dokumentumkezelési megoldásainkról?</div>
                        <a class="btn is-large is-primary" href="{{ url('#contact') }}">Kérjen egy bemutatót</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                            <li>felhőalapú tárolás (Google Drive, OneDrive, Dropbox, Box, Amazon S3)</li>
                            <li>Google Docs és Office 365 integráció</li>
                            <li>testreszabható dokumentum sablonok</li>
                            <li>üzenet-hírfolyamok</li>
                            <li>e-mailek és push-értesítések</li>
                        </ul>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Használja együtt további megoldásainkkal</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="solution__nav solution__nav--productivity">
                            <nav class="solution__nav__items">
                                <a href="{{ localizedRoute('solutions.crm') }}">CRM</a>
                                <a href="{{ localizedRoute('solutions.sales') }}">Értékesítés</a>
                                <a href="{{ localizedRoute('solutions.projects') }}">Projektmenedzsment</a>
                                <a href="{{ localizedRoute('solutions.plm') }}">PLM</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution__blog">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-2">Miért válasszon testreszabott megoldást?</div>
                        <a class="btn is-large is-primary" href="{{ localizedRoute('blog.view', ['slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver']) }}">Tudja meg itt</a>
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
                    "@id": "{{ localizedRoute('solutions.dms') }}",
                    "name": "Testreszabott dokumentumkezelő rendszerek"
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
    "description": "Testreszabott dokumentumkezelő megoldásunkkal bármihez csatolhat dokumentumokat, emberektől projektekig vagy termékekig.",
    "headline": "Testreszabott dokumentumkezelő rendszerek",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Dokumentumkezelés, Dokumentumtár, Dokumentummenedzsment, DMS",
    "mainEntityOfPage": "{{ localizedRoute('solutions.dms') }}",
    "name": "Testreszabott dokumentumkezelő rendszerek",
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
                "@id": "{{ localizedRoute('solutions.dms') }}",
                "name": "Testreszabott dokumentumkezelő rendszerek"
            }
        }
    ]
}
</script>
@endpush
