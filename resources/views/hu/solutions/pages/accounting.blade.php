@extends('hu.site')

@section('title', 'Egyedi online számviteli megoldások')
@section('description', 'Felejtsd el az ügyletek manuális bejegyzéseit, és győződj meg arról, hogy gyorsabban kapo meg a kifizetéseket az egyedi számviteli megoldásainkkal.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Testreszabott számviteli szoftver</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">Felejtsd el az ügyletek manuális bejegyzéseit, és győződj meg arról, hogy gyorsabban kapo meg a kifizetéseket az egyedi számviteli megoldásainkkal.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Hozz létre és küldjél igényes számlákat</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet">
                        <p>Használj testreszabható mintákat elegáns számlák létrehozásához, amelyeket közvetlenül az általunk kifejlesztett számviteli szoftveréből küldhetsz el. Ha igénybe veszed az <a href="{{ localizedRoute('solutions.sales') }}">értékesítési megoldásainkat</a> is, akkor a számlát egyetlen kattintással generálhatod a rendelésekből. Kövesd egy központi műszerfalon a kifizetéseket, és küldjél automatikus emlékeztető e-maileket annak érdekében, hogy biztosítsd a kifizetést.</p>
                        <ul class="list has-bullets">
                            <li>hozz létre számlákat testreszabható mintákból</li>
                            <li>generálj számlákat a rendelésekből egyetlen kattintással</li>
                            <li>állíts be ismétlődő számlákat</li>
                            <li>nyomtass vagy küldjék számlákat közvetlenül a szoftverből</li>
                            <li>állíts be automatikus emlékeztető e-maileket</li>
                            <li>kövesd nyomon könnyen a kifizetéseket</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/accounting-illustration-invoice.png') }}" alt="Hozz létre és küldjél igényes számlákat" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <h3 class="heading-3">Kezeld a számlákat és a költségeket</h3>
                    <p>Importáld és kezeld a beszállítói számlákat és kapjál egy egyértelmű előrejelzést a jövőbeli kiadásokról. Ha beszállítód alkalmazásprogramozási felületet (API-t) biztosít a számlákhoz való hozzáféréshez, akkor a számlákat automatikusan importálhatjuk vagy lehetőséget biztosíthatunk a manuális feltöltésükhöz.</p>
                    <ul class="list has-bullets">
                        <li>importáld a beszállítói számlákat</li>
                        <li>irányítsd az aktuális költségeit</li>
                        <li>kapjál előrejelzést a jövőbeli számláiról</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/accounting-illustration-bills-expenses.png') }}" alt="Kezeld a számlákat és a költségeket" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Hozz létre elegáns pénzügyi nyilatkozatokat</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet">
                        <p>Miután rögzítetted az összes számládat és kiadásodat, bármilyen mintákon alapuló igény szerinti pénzügyi nyilatkozatot generálhatsz. Bevételi jelentések, mérlegek vagy pénzforgalmi kimutatások úgy, ahogyan Te szereted&hellip;</p>
                        <ul class="list has-bullets">
                            <li>testreszabható sablonok</li>
                            <li>automatikus jelentés- és nyilatkozatgenerálás</li>
                            <li>szűrhető és összehasonlítható adatok</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/accounting-illustration-cash-flow.png') }}" alt="Hozz létre elegáns pénzügyi nyilatkozatokat" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half-tablet is-offset-4-desktop">
                    <h3 class="heading-3">Integráld harmadik felek szoftvereivel</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <p>Ha nem szeretnél mintákat használni a számlák létrehozásához, akkor olyan harmadik felek számlázási megoldásait integrálhatjuk, mint a FreshBooks, az Invoicely, a Számlázz.hu vagy a Billingo. Ha bankod engedélyezi, akkor szinkronizálhatjuk bankszámlakivonataidat is. Annak érdekében, hogy ügyfeleid számára könnyebbé váljon a fizetés, a kifizetéseket olyan szolgáltatások segítségével állíthatjuk be, mint például a Stripe, a Braintree, Barion vagy az OTP).</p>
                    <ul class="list has-bullets">
                        <li>generálj számlákat harmadik felek platformjain</li>
                        <li>szinkronizáld a bankszámlakivonatokat</li>
                        <li>fogadj el kifizetéseket online fizetési szolgáltatások segítségével</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/accounting-illustration-integrations.png') }}" alt="Integráld harmadik felek szoftvereivel" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution__cta">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-2">Szeretnél többet megtudni számviteli megoldásainkról?</div>
                        <a class="btn is-large is-pearl" href="{{ url('#contact') }}">Kérj egy bemutatót</a>
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
                            <li>ismétlődő számlázás</li>
                            <li>kifizetések követése</li>
                            <li>online fizetési szolgáltatók integrációja</li>
                            <li>testreszabható dokumentumsablonok</li>
                            <li>egy kattintásos dokumentumgenerálás</li>
                            <li>nagy mennyiségű adatbevitel</li>
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
                                <a href="{{ localizedRoute('solutions.sales') }}">Értékesítés</a>
                                <a href="{{ localizedRoute('solutions.projects') }}">Projektmenedzsment</a>
                                <a href="{{ localizedRoute('solutions.time-tracking') }}">Időkövetés</a>
                                <a href="{{ localizedRoute('solutions.dms') }}">Dokumentumkezelés</a>
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
                    "@id": "{{ localizedRoute('solutions.accounting') }}",
                    "name": "Egyedi online számviteli megoldások"
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
    "description": "Felejtsd el az ügyletek manuális bejegyzéseit, és győződj meg arról, hogy gyorsabban kapo meg a kifizetéseket az egyedi számviteli megoldásainkkal.",
    "headline": "Egyedi online számviteli megoldások",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Számvitel, Számviteli szoftver",
    "mainEntityOfPage": "{{ localizedRoute('solutions.accounting') }}",
    "name": "Egyedi online számviteli megoldások",
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
                "@id": "{{ localizedRoute('solutions.accounting') }}",
                "name": "Egyedi online számviteli megoldások"
            }
        }
    ]
}
</script>
@endpush
