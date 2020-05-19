@extends('hu.site')

@section('title', 'Munkáink')
@section('description', 'Projektkeink meghatároznak minket. Büszkék vagyunk munkáinkra és párat megosztottuk közűlük esettanulmányok formájában. Ha Te is úgy lelkesedsz projektjeinkért mint mi, lépjen velünk kapcsolatba és még többet megosztunk Veled!')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Munkáink</h1>
                    <div class="project-list">
                        <div class="col is-full-mobile is-half-tablet is-half-desktop">
                            <div class="project" style="background-image: url(/media/projects/cover-njoy-the-hive.jpg)">
                                <a href="{{ localizedRoute('projects.show', ['slug' => 'njoy-the-hive']) }}"><h3 class="project__title">nJoy - The Hive</h3></a>
                            </div>
                        </div>
                        <div class="col is-hidden-mobile is-hidden-tablet-only is-one-quarter-desktop">
                            <div class="project is-stat">
                                <span class="project__stat__main">{{ config('site.stats.clients') }}</span>
                                <span class="project__stat__sub">ügyfél</span>
                            </div>
                        </div>
                        <div class="col is-full-mobile is-half-tablet is-one-quarter-desktop">
                            <div class="project" style="background-image: url(/media/projects/cover-cravcitech.jpg)">
                                <a href="{{ localizedRoute('projects.show', ['slug' => 'cravcitech-weboldal']) }}"><h3 class="project__title">Cravcitech</h3></a>
                            </div>
                        </div>
                        <div class="col is-full-mobile is-half-tablet is-one-quarter-desktop">
                            <div class="project is-rowspan" style="background-image: url(/media/projects/cover-steiger.jpg)">
                                <a href="{{ localizedRoute('projects.show', ['slug' => 'steiger-erp']) }}"><h3 class="project__title">Steiger ERP</h3></a>
                            </div>
                        </div>
                        <div class="col is-hidden-mobile is-hidden-tablet-only is-one-quarter-desktop">
                            <div class="project is-stat">
                                <span class="project__stat__main">{{ config('site.stats.projects') }}+</span>
                                <span class="project__stat__sub">projekt</span>
                            </div>
                        </div>
                        <div class="col is-full-mobile is-half-tablet is-half-desktop">
                            <div class="project" style="background-image: url(/media/projects/cover-mentorme.jpg)">
                                <a href="{{ localizedRoute('projects.show', ['slug' => 'mentorme-elo-oktatovideo-szoftver']) }}"><h3 class="project__title">mentor.me</h3></a>
                            </div>
                        </div>
                        <div class="col is-full-mobile is-half-tablet is-one-quarter-desktop">
                            <div class="project" style="background-image: url(/media/projects/cover-idea.jpg)">
                                <a href="{{ localizedRoute('projects.show', ['slug' => 'idea-elearning-szoftver']) }}"><h3 class="project__title">IDEA</h3></a>
                            </div>
                        </div>
                        <div class="col is-full-mobile is-half-tablet is-one-quarter-desktop">
                            <div class="project" style="background-image: url(/media/projects/cover-profnet.jpg)">
                                <a href="{{ localizedRoute('projects.show', ['slug' => 'profnet-elearning-platform']) }}"><h3 class="project__title">PROFNET</h3></a>
                            </div>
                        </div>
                        <div class="col is-hidden-mobile is-hidden-tablet-only is-one-quarter-desktop">
                            <div class="project is-stat">
                                <span class="project__stat__main">{{ config('site.stats.countries') }}</span>
                                <span class="project__stat__sub">országban</span>
                            </div>
                        </div>
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
                    "@id": "{{ localizedRoute('projects') }}",
                    "name": "Munkáink"
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
    "description": "Projektkeink meghatároznak minket. Büszkék vagyunk munkáinkra és párat megosztottuk közűlük esettanulmányok formájában. Ha Te is úgy lelkesedsz projektjeinkért mint mi, lépjen velünk kapcsolatba és még többet megosztunk Veled!",
    "headline": "Munkáink",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, MVP fejlesztés, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('projects') }}",
    "name": "Munkáink",
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
                "@id": "{{ localizedRoute('projects') }}",
                "name": "Munkáink"
            }
        }
    ]
}
</script>
@endpush
