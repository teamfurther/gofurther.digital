@extends('hu.site')

@section('title', 'Online értékesítési szoftver')
@section('description', 'Az ügyfeleink számára kifejlesztett értékesítési modulok lehetővé teszik az árajánlatok és a szerződések könnyű generálását és elküldését.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Egyedi értékesítési modulok</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">Az ügyfeleink számára kifejlesztett értékesítési modulok lehetővé teszik az árajánlatok és a szerződések könnyű generálását és elküldését.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Küldj igényes és testreszabott árajánlatokat</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet">
                        <p>Az értékesítési modul lehetővé teszi a személyre szabott sablonok használatát, vagy leírások, képek és további információk hozzáadását. Meghatározhatod az ügyféllel kapcsolatos feltételeket és az árlistázási szabályokat a megfelelő ár kiszámításához, vagy további opciókat és kedvezményeket javasolhatsz az értékesítési mennyiség növelése érdekében.</p>
                        <ul class="list has-bullets">
                            <li>elegáns testreszabható sablonok</li>
                            <li>dinamikus árképzés meghatározott feltételek és szabályok szerint</li>
                            <li>a nyereség maximalizálása felülértékesítéssel (upsell)</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/sales-illustration-quotation.png') }}" alt="Küldj igényes és testreszabott árajánlatokat" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-4-tablet">
                    <h3 class="heading-3">Automatizált rendelés- és szerződésgenerálás</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-two-thirds-tablet">
                    <p>Alakíts át könnyen bármilyen árajánlatot megrendeléssé és generálj egy szerződést, ha szükséges. Ha még több rugalmasságra van szükséged, akkor integráld a modult a <a href="{{ localizedRoute('solutions.accounting') }}">számviteli modulunkkal</a> vagy a <a href="{{ localizedRoute('solutions.dms') }}">dokumentumkezelő rendszerünkkel</a>. Az értékesítési modul nyomon követheti a megújítási vagy felülértékesítési lehetőségeket is.</p>
                    <ul class="list has-bullets">
                        <li>egy kattintásos megrendelés- és szerződésgenerálás</li>
                        <li>testreszabható szerződésminták</li>
                        <li>eletronikus aláírással való jóváhagyás</li>
                        <li>értesítések megújítási vagy felülértékesítési lehetőségekről</li>
                    </ul>
                </div>
                <div class="column is-one-third-tablet">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/sales-illustration-document-generation.png') }}" alt="Automatizált rendelés- és szerződésgenerálás" />
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact', [
        'buttonText' => 'Kérj egy bemutatót',
        'headingText' => 'Szeretnél többet megtudni értékesítési megoldásainkról?'
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
                        <ul class="list has-bullets has-margin-b60">
                            <li>testreszabható dokumentumsablonok</li>
                            <li>dinamikus árképzés</li>
                            <li>egy kattintásos automatizált dokumentumgenerálás</li>
                            <li>elektronikus aláírások</li>
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
                                <a href="{{ localizedRoute('solutions.accounting') }}">Számvitel</a>
                                <a href="{{ localizedRoute('solutions.projects') }}">Projektek</a>
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
                    "@id": "{{ localizedRoute('solutions.sales') }}",
                    "name": "Online értékesítési szoftver"
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
    "description": "Az ügyfeleink számára kifejlesztett értékesítési modulok lehetővé teszik az árajánlatok és a szerződések könnyű generálását és elküldését.",
    "headline": "Online értékesítési szoftver",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Értékesítési szoftver, Árajánlatadási szoftver",
    "mainEntityOfPage": "{{ localizedRoute('solutions.sales') }}",
    "name": "Online értékesítési szoftver",
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
                "@id": "{{ localizedRoute('solutions.sales') }}",
                "name": "Online értékesítési szoftver"
            }
        }
    ]
}
</script>
@endpush
