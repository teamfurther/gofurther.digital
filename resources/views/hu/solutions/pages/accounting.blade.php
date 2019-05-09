@extends('hu.site')

@section('title', 'Egyedi online számviteli megoldások')
@section('description', 'Felejtse el az ügyletek manuális bejegyzéseit, és győződjön meg arról, hogy gyorsabban kapja meg a kifizetéseket az egyedi számviteli megoldásainkkal.')

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
                        <p class="solution__intro">Felejtse el az ügyletek manuális bejegyzéseit, és győződjön meg arról, hogy gyorsabban kapja meg a kifizetéseket az egyedi számviteli megoldásainkkal.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Hozzon létre és küldjön igényes számlákat</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet">
                        <p>Használjon testreszabható mintákat elegáns számlák létrehozásához, amelyeket közvetlenül az általunk kifejlesztett számviteli szoftveréből küldhet el. Ha igénybe veszi az <a href="{{ localizedRoute('solutions.sales') }}">értékesítési megoldásainkat</a> is, akkor a számlát egyetlen kattintással generálhatja a rendelésekből. Kövesse egy központi műszerfalon a kifizetéseket, és küldjön automatikus emlékeztető e-maileket annak érdekében, hogy biztosítsa a kifizetést.</p>
                        <ul class="list has-bullets">
                            <li>hozzon létre számlákat testreszabható mintákból</li>
                            <li>generáljon számlákat a rendelésekből egyetlen kattintással</li>
                            <li>állítson be ismétlődő számlákat</li>
                            <li>nyomtasson vagy küldjön számlákat közvetlenül a szoftverből</li>
                            <li>állítson be automatikus emlékeztető e-maileket</li>
                            <li>kövesse nyomon könnyen a kifizetéseket</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/accounting-illustration-invoice.png') }}" alt="Hozzon létre és küldjön igényes számlákat" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <h3 class="heading-3">Kezelje a számlákat és a költségeket</h3>
                    <p>Importálja és kezelje a beszállítói számlákat és kapjon egy egyértelmű előrejelzést a jövőbeli kiadásokról. Ha beszállítója alkalmazásprogramozási felületet (API-t) biztosít a számlákhoz való hozzáféréshez, akkor a számlákat automatikusan importálhatjuk vagy lehetőséget biztosíthatunk a manuális feltöltésükhöz.</p>
                    <ul class="list has-bullets">
                        <li>importálja a beszállítói számlákat</li>
                        <li>irányítsa az aktuális költségeit</li>
                        <li>kapjon előrejelzést a jövőbeli számláiról</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/accounting-illustration-bills-expenses.png') }}" alt="Kezelje a számlákat és a költségeket" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Hozzon létre elegáns pénzügyi nyilatkozatokat</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet">
                        <p>Miután rögzítette az összes számláját és kiadását, bármilyen mintákon alapuló igény szerinti pénzügyi nyilatkozatot generálhat. Bevételi jelentések, mérlegek vagy pénzforgalmi kimutatások úgy, ahogyan Ön szereti&hellip;</p>
                        <ul class="list has-bullets">
                            <li>testreszabható sablonok</li>
                            <li>automatikus jelentés- és nyilatkozatgenerálás</li>
                            <li>szűrhető és összehasonlítható adatok</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/accounting-illustration-cash-flow.png') }}" alt="Hozzon létre elegáns pénzügyi nyilatkozatokat" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half-tablet is-offset-4-desktop">
                    <h3 class="heading-3">Integrálja harmadik felek szoftvereivel</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <p>Ha nem szeretne mintákat használni a számlák létrehozásához, akkor harmadik felek számlázási megoldásait integrálhatjuk, mint a FreshBooks, az Invoicely, a Számlázz.hu vagy a Billingo. Ha bankja engedélyezi, akkor szinkronizálhatjuk bankszámlakivonatait is. Annak érdekében, hogy ügyfelei számára könnyebbé váljon a fizetés, a kifizetéseket olyan szolgáltatások segítségével állíthatjuk be, mint például a Stripe, a Braintree, Barion vagy az OTP).</p>
                    <ul class="list has-bullets">
                        <li>generáljon számlákat harmadik felek platformjain</li>
                        <li>szinkronizálja a bankszámlakivonatokat</li>
                        <li>fogadjon el kifizetéseket online fizetési szolgáltatások segítségével</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/accounting-illustration-integrations.png') }}" alt="Integrálja harmadik felek szoftvereivel" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution__cta">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-2">Szeretne többet megtudni számviteli megoldásainkról?</div>
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
                        <h3 class="heading-3">Használja együtt további megoldásainkkal</h3>
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
    "description": "Felejtse el az ügyletek manuális bejegyzéseit, és győződjön meg arról, hogy gyorsabban kapja meg a kifizetéseket az egyedi számviteli megoldásainkkal.",
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
