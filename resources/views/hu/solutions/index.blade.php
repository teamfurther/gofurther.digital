@extends('hu.site')

@section('title', 'Megoldásaink')
@section('description', 'Fejleszd vállalatod és növeld eladásait ügyviteli szoftvereink segítségével. Feltérképezzük és megértjük a vállalkozásodnak a munkafolyamatait, hogy olyan szoftvert fejlesszünk amellyel automatizálhatjuk a napi teendőket.')

@section('content')
    <section class="section">
        <div class="solution__nav solution__nav--sales-operations">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Megoldásaink</h1>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h2 class="solution__nav__title">Vállalatirányítás és ügyvitel</h2>
                        <nav class="solution__nav__items">
                            <a href="{{ localizedRoute('solutions.crm') }}">CRM</a>
                            <a href="{{ localizedRoute('solutions.sales') }}">Értékesítés</a>
                            <a href="{{ localizedRoute('solutions.projects') }}">Projektmenedzsment</a>
                            <a href="{{ localizedRoute('solutions.accounting') }}">Számvitel</a>
                            <a href="{{ localizedRoute('solutions.purchase') }}">Beszerzés és leltározás</a>
                            <a href="{{ localizedRoute('solutions.plm') }}">Termékéletciklus-kezelés</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="solution__nav solution__nav--productivity">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h2 class="solution__nav__title">Kommunikáció és produktivitás</h2>
                        <nav class="solution__nav__items">
                            <a href="{{ localizedRoute('solutions.communication') }}">Kommunikáció</a>
                            <a href="{{ localizedRoute('solutions.time-tracking') }}">Időkövetés</a>
                            <a href="{{ localizedRoute('solutions.hr') }}">Emberi erőforrások</a>
                            <a href="{{ localizedRoute('solutions.dms') }}">Dokumentumkezelés</a>
                            <a href="{{ localizedRoute('solutions.wiki') }}">Tudástár</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution__nav solution__nav--web-mobile">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h2 class="solution__nav__title">Web és mobilfejlesztés</h2>
                        <nav class="solution__nav__items">
                            <a href="{{ localizedRoute('solutions.mvp') }}">MVP fejlesztés</a>
                            <a href="{{ localizedRoute('solutions.mobile') }}">Mobilapplikációk</a>
                            <a href="{{ localizedRoute('solutions.chronos') }}">Egyedi weboldalak - Chronos CMS</a>
                            <a href="{{ localizedRoute('solutions.ecommerce') }}">Webáruház</a>
                        </nav>
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
    "description": "Fejleszd vállalatod és növeld eladásait ügyviteli szoftvereink segítségével. Feltérképezzük és megértjük a vállalkozásodnak a munkafolyamatait, hogy olyan szoftvert fejlesszünk amellyel automatizálhatjuk a napi teendőket.",
    "headline": "Megoldásaink",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, MVP fejlesztés, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('solutions') }}",
    "name": "Megoldásaink",
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
        }
    ]
}
</script>
@endpush
