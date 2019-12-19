@extends('hu.site')

@section('title', 'Testreszabott ellátási lánc- és leltárkezelés')
@section('description', 'Fokozd operativitásod egyedi ellátásilánc-menedzsment megoldásainkkal.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Egyedi beszerzési és leltározási modulok</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">Fokozd operativitásod egyedi ellátásilánc-menedzsment megoldásainkkal.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Adj jogokat a beszállítóknak</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>Ne csak az ügyfeleid kezeld, hanem a beszállítóidat is. A felhasználói és szerepkör-jogosultságok lehetővé teszik azt, hogy partnereid hozzáférjenek más modulokhoz, mint például a vásárlási modulhoz. Így értesítést kapnak az ajánlatkérésről, és azonnal válaszolhatnak ezekre.</p>
                        <ul class="list has-bullets">
                            <li>adj hozzáférést a beszállítóidnak</li>
                            <li>küldj nekik valós idejű értesítéseket</li>
                            <li>engedd meg nekik, hogy válaszoljanak az ajánlatkérésekre</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/purchase-illustration-suppliers.png') }}" alt="Engedd meg a beszállítóknak hogy válaszoljanak az ajánlatkérésekre" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half-tablet is-offset-4-desktop">
                    <h3 class="heading-3">Megrendelés a legjobb áron</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <p>A vásárlási szoftverét olyan módon fejleszthetjük, hogy a forgalmazók közvetlenül vagy API-n keresztül hozzáférjenek, és feltölthessék árlistáikat és termékeik hozzáférhetőségét. Ezáltal a legkedvezőbben vásárolhatsz, a mennyiségek és kedvezmények alapján. Te is kezdeményezhetsz árajánlatkérést több szállítótól, és összehasonlíthatod ajánlataikat.</p>
                    <ul class="list has-bullets">
                        <li>lehetővé teszed a szállítók számára az árlisták és készletek feltöltését</li>
                        <li>vásárlási árajánlatkérés kezdeményezése</li>
                        <li>hasonlítsd össze a legjobb ajánlatokat</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/purchase-illustration-compare-prices.png') }}" alt="Hasonlítsd össze a beszállítói árakat" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Mindig kövesd nyomon a készleted</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet">
                        <p>Kövess nyomon minden lépést, a vásárlástól a raktározásig és az eladásig. Elegáns műszerfalaink mindig gyors áttekintést nyújtanak készleteidről és raktáraidról. Ha úgy gondolod, hogy a műszerfalak nem elég részletesek, akkor bármikor egy egyszerű kattintással részletes jelentéseket készíthetsz.</p>
                        <ul class="list has-bullets">
                            <li>kövess nyomon minden készletmozgását</li>
                            <li>kezelj több raktárt</li>
                            <li>élvezd a testreszabható műszerfalakat</li>
                            <li>juss hozzá az összes információhoz a részletes jelentésekből</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/purchase-illustration-track-inventory.png') }}" alt="Mindig kövesd nyomon a készleted" />
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
                        <div class="heading-2">Szeretnél többet megtudni beszerzési és leltárkezelési megoldásainkról?</div>
                        <a class="btn is-large is-pearl" href="{{ url('#contact') }}">Kérjél egy bemutatót</a>
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
                            <li>felhasználói- és szerepkör-menedzsment</li>
                            <li>e-mailek és push-értesítések</li>
                            <li>API-hozzáférés partnereknek</li>
                            <li>vásárlási tenderek</li>
                            <li>raktárkezelés</li>
                            <li>testreszabható műszerfalak</li>
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
                                <a href="{{ localizedRoute('solutions.crm') }}">CRM</a>
                                <a href="{{ localizedRoute('solutions.sales') }}">Értékesítés</a>
                                <a href="{{ localizedRoute('solutions.accounting') }}">Könyvelés</a>
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
                        <div class="heading-2">Miért válassz testreszabott megoldást?</div>
                        <a class="btn is-large is-pearl" href="{{ localizedRoute('blog.view', ['slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver']) }}">Tudd meg itt</a>
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
                    "@id": "{{ localizedRoute('solutions.purchase') }}",
                    "name": "Testreszabott ellátási lánc- és leltárkezelés"
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
    "description": "Fokozd operativitásod egyedi ellátásilánc-menedzsment megoldásainkkal.",
    "headline": "Testreszabott ellátási lánc- és leltárkezelés",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Ellátási lánc, Beszerzés, Leltár, Leltározás, Leltárkezelés, Raktármenedzsment",
    "mainEntityOfPage": "{{ localizedRoute('solutions.purchase') }}",
    "name": "Testreszabott ellátási lánc- és leltárkezelés",
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
                "@id": "{{ localizedRoute('solutions.purchase') }}",
                "name": "Testreszabott ellátási lánc- és leltárkezelés"
            }
        }
    ]
}
</script>
@endpush
