@extends('hu.site')

@section('title', 'Beszéljétek és osszátok meg ötleteiteket')
@section('description', 'Integrált moduljaink segítségével hatékonyabban kommunikálhatsz és oszthatsz meg ötleteket csapatoddal, partnereiddel vagy ügyfeleiddel.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Testre szabott kommunikációs megoldások</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">Integrált moduljaink segítségével hatékonyabban kommunikálhatsz és oszthatsz meg ötleteket csapatoddal, partnereiddel vagy ügyfeleiddel.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Vegyél részt a párbeszédben</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>Beszéld meg kollégáiddal a projekteket vagy a dokumentumokat. Bárhova integrálhatjuk megoldásainkat, lehetővé téve a csevegést és a fájlmegosztást személyes és csoportos beszélgetésekben. Részletes értesítési beállításokat biztosítunk, ezért csak azokról a beszélgetésekről kapsz e-mailt vagy push-értesítést, amelyekről tényleg szeretnél.</p>
                        <ul class="list has-bullets">
                            <li>csevegés és üzenetírás az ablakok közötti váltáskor</li>
                            <li>integrálható bármely más megoldással</li>
                            <li>osszd meg fájljait</li>
                            <li>hozz létre csoportos csatornákat</li>
                            <li>említs meg más felhasználókat a figyelemfelkeltés céljából</li>
                            <li>jelöld meg csillaggal kedvenc beszélgetéseid</li>
                            <li>e-mailek és push-értesítések</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('media/solutions/communication-illustration-chat.png') }}" alt="Vegyél részt a párbeszédben" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half-tablet is-offset-4-desktop">
                    <h3 class="heading-3">Használd ki az e-mail erejét</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <p>E-mailes megoldásainkat használhatod úgy a vállalaton belüli hirdetésekre, mint az ügyfelekre irányuló marketing célokra. Testreszabható sablonokat hozhatunk létre, így akár néhány perc alatt tranzakciós e-maileket és hírleveleket küldhetsz.</p>
                    <ul class="list has-bullets">
                        <li>testreszabható e-mail sablonok</li>
                        <li>céges közlemények</li>
                        <li>ütemezett e-mailek</li>
                        <li>levelezési listák</li>
                        <li>e-mail értesítések</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('media/solutions/communication-illustration-announcements.png') }}" alt="Használd ki az e-mail erejét" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Hozz létre vonzó e-mailes marketingkampányokat</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>Használd elegáns sablonjainkat, és egészítsd ki őket igényeid szerint vonzó tartalmakkal a leadek generálásához. Sikerességed javíthatod az adatbázis szegmentálásával és a célcsoportoknak való e-mailküldéssel, A/B teszteléses e-mailek kiküldésével, de az egyes kampányok pontos és valós idejű statisztikával történő nyomon követésével is.</p>
                        <ul class="list has-bullets">
                            <li>igényes testreszabható e-mail sablonok</li>
                            <li>minden eszközön optimálisan jelenik meg</li>
                            <li>célcsoportok hely, dátum és más kritériumok szerint</li>
                            <li>A/B tesztelés</li>
                            <li>pontos jelentések és elemzések</li>
                            <li>feliratkozási widgetek</li>
                            <li>leiratkozási funkció</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('media/solutions/communication-illustration-newsletter.png') }}" alt="Hozz létre vonzó e-mailes marketingkampányokat" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <h3 class="heading-3">Szervezd meg munkádat jegyzetekkel és feladatlistákkal</h3>
                    <p>Jegyzet- és feladatlista-modulunkat bármely más megoldásunkkal integrálhatjuk, így bármivel összekapcsolhatod a jegyzeteket és a feladatlistákat: személyekkel, dokumentumokkal és termékekkel. Lendítsd fel termelékenységed úgy, hogy megosztod ötleteidet és együttműködsz csapatoddal.</p>
                    <ul class="list has-bullets">
                        <li>hozz létreg yorsan jegyzeteket</li>
                        <li>legyen a feladatlista mindig kéznél</li>
                        <li>kapcsold össze személyekkel, dokumentumokkal vagy termékekkel</li>
                        <li>kapj értesítést egy adott feladat esedékességéről</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('media/solutions/communication-illustration-todos.png') }}" alt="Szervezd meg munkádat jegyzetekkel és feladatlistákkal" />
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact', [
        'buttonText' => 'Kérj egy bemutatót',
        'headingText' => 'Szeretnél többet megtudni kommunikációs megoldásainkról?'
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
                            <li>chat és üzenetküldési ablakok</li>
                            <li>e-mailek és push-értesítések</li>
                            <li>reszponzív e-mail sablonok</li>
                            <li>hírlevelek</li>
                            <li>e-mail elemzések</li>
                            <li>jegyzetek és feladatlisták</li>
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
                    "@id": "{{ localizedRoute('solutions.communication') }}",
                    "name": "Beszéljétek és osszátok meg ötleteiteket"
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
    "description": "Integrált moduljaink segítségével hatékonyabban kommunikálhatsz és oszthatsz meg ötleteket csapatoddal, partnereiddel vagy ügyfeleiddel.",
    "headline": "Beszéljétek és osszátok meg ötleteiteket",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Chat, Üzenetküldés, E-mail marketing",
    "mainEntityOfPage": "{{ localizedRoute('solutions.communication') }}",
    "name": "Beszéljétek és osszátok meg ötleteiteket",
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
                "@id": "{{ localizedRoute('solutions.communication') }}",
                "name": "Beszéljétek és osszátok meg ötleteiteket"
            }
        }
    ]
}
</script>
@endpush
