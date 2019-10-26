@extends('hu.site')

@section('title', 'Testreszabott ügyfélkapcsolat-kezelési megoldások kis- és középvállalkozásoknak')
@section('description', 'Az évek során számos egyedi, jelenleg több ezer felhasználót kiszolgáló CRM-modult fejlesztettünk ki KKV-k és nagyvállalati ügyfeleink számára.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Egyedi CRM szoftver</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">Az évek során számos egyedi, jelenleg több ezer felhasználót kiszolgáló CRM-modult fejlesztettünk ki KKV-k és nagyvállalati ügyfeleink számára.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Különböző adatforrások integrálása</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>Ha befektetsz vállalkozásod marketingjébe, akkor mindenképpen nyomon kellene követned honnan jönnek az ügyfeleid. Bármilyen adatforrás integrálható, ami kevesebb manuális munkát és kevesebb adatvesztést jelent.</p>
                        <ul class="list has-bullets has-two-columns">
                            <li>internetes kapcsolatfelvételi űrlapok</li>
                            <li>landing oldalak</li>
                            <li>e-mail kampányok</li>
                            <li>közösségi média</li>
                            <li>telefonhívások</li>
                            <li>referral-ok</li>
                            <li>online vásárlás</li>
                            <li>webes elemzések</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/crm-illustration-data-sources.png') }}" alt="Különböző adatforrások integrálása" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half">
                    <h3 class="heading-3">Egyedi értékesítési csatornák</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-half-tablet">
                    <p>Az értékesítési csatornák szerkezete különbözik vállalatonként, és ezt a Te CRM rendszerednek is tükröznie kell. A Te munkafolyamatodnak elemzésével és megértésével olyan szoftveres megoldást fejlesztünk ki, amely leképezi a szükséges műveletek sorrendjét annak érdekében, hogy a potenciális ügyfelekből új ügyfelek legyenek.</p>
                    <ul class="list has-bullets">
                        <li>személyre szabhatod az értékesítési folyamat szakaszait</li>
                        <li>az ügyfeleket kategóriákba rendezheted</li>
                        <li>több csatornát hozhatsz létre a különböző csapatok számára</li>
                    </ul>
                </div>
                <div class="column is-half-tablet">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/crm-illustration-sales-pipeline.png') }}" alt="Egyedi értékesítési csatornák" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Személyre szabott jelentések</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet">
                        <p>Kapjál áttekintést az értékesítési teljesítményéről és használd ezeket az adatokat jobb döntések meghozatalára. Készíts diagramokat az ügynökök vagy csapatok teljesítményéről, földrajzi és időrendi adatokból vagy bármilyen más adatból ami értékes döntéshozatali szempontból.</p>
                        <ul class="list has-bullets">
                            <li>értékesítési csatorna elemzések</li>
                            <li>tölcsérjelentések (funnel report)</li>
                            <li>kampányok</li>
                            <li>konverziós arányok</li>
                            <li>prognózisok/előrejelzések</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/crm-illustration-reports.png') }}" alt="Személyre szabott jelentések" />
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
                        <div class="heading-2">Szeretnél többet megtudni CRM megoldásainkról?</div>
                        <a class="btn is-large is-primary" href="{{ url('#contact') }}">Kérjél egy bemutatót</a>
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
                            <li>személyre szabható felhasználói profilok (mezők és szűrők)</li>
                            <li>lead-ek generálása és nyomon követése</li>
                            <li>egyedi értékesítési csatornák</li>
                            <li>kampánymenedzsment</li>
                            <li>tömeges e-mailküldés</li>
                            <li>személyre szabott jelentések</li>
                            <li>e-mailek és push-értesítések</li>
                            <li>automatikusan szinkronizálódó névjegyzék</li>
                            <li>harmadik felek szolgáltatásainak integrációja</li>
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
                                <a href="{{ localizedRoute('solutions.communication') }}">Kommunikáció</a>
                                <a href="{{ localizedRoute('solutions.dms') }}">Dokumentumkezelés</a>
                                <a href="{{ localizedRoute('solutions.wiki') }}">Tudásközpont</a>
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
                        <a class="btn is-large is-primary" href="{{ localizedRoute('blog.view', ['slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver']) }}">Tudd meg itt</a>
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
                    "@id": "{{ localizedRoute('solutions.crm') }}",
                    "name": "Testreszabott ügyfélkapcsolat-kezelési megoldások kis- és középvállalkozásoknak"
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
    "description": "Az évek során számos egyedi, jelenleg több ezer felhasználót kiszolgáló CRM-modult fejlesztettünk ki KKV-k és nagyvállalati ügyfeleink számára.",
    "headline": "Testreszabott ügyfélkapcsolat-kezelési megoldások kis- és középvállalkozásoknak",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "CRM",
    "mainEntityOfPage": "{{ localizedRoute('solutions.crm') }}",
    "name": "Testreszabott ügyfélkapcsolat-kezelési megoldások kis- és középvállalkozásoknak",
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
                "@id": "{{ localizedRoute('solutions.crm') }}",
                "name": "Testreszabott ügyfélkapcsolat-kezelési megoldások kis- és középvállalkozásoknak"
            }
        }
    ]
}
</script>
@endpush
