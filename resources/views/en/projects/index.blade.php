@extends('en.site')

@section('title', 'Our work')
@section('description', 'Our projects are what define us. We are proud of our work and shared some of them as case studies for you to read. If you like what you see, let us know and we can show you more.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Our Work</h1>
                    <div class="project-list">
                        <div class="col is-full-mobile is-half-tablet is-half-desktop">
                            <div class="project" style="background-image: url(/media/projects/cover-njoy-the-hive.jpg)">
                                <a href="{{ localizedRoute('projects.view', ['slug' => 'njoy-the-hive']) }}"><h3 class="project__title">nJoy - The Hive</h3></a>
                            </div>
                        </div>
                        <div class="col is-hidden-mobile is-hidden-tablet-only is-one-quarter-desktop">
                            <div class="project is-stat">
                                <span class="project__stat__main">63</span>
                                <span class="project__stat__sub">clients</span>
                            </div>
                        </div>
                        <div class="col is-full-mobile is-half-tablet is-one-quarter-desktop">
                            <div class="project" style="background-image: url(/media/projects/cover-cravcitech.jpg)">
                                <a href="{{ localizedRoute('projects.view', ['slug' => 'cravcitech-website']) }}"><h3 class="project__title">Cravcitech</h3></a>
                            </div>
                        </div>
                        <div class="col is-full-mobile is-half-tablet is-one-quarter-desktop">
                            <div class="project is-rowspan" style="background-image: url(/media/projects/cover-steiger.jpg)">
                                <a href="{{ localizedRoute('projects.view', ['slug' => 'steiger-erp']) }}"><h3 class="project__title">Steiger ERP</h3></a>
                            </div>
                        </div>
                        <div class="col is-hidden-mobile is-hidden-tablet-only is-one-quarter-desktop">
                            <div class="project is-stat">
                                <span class="project__stat__main">160+</span>
                                <span class="project__stat__sub">projects</span>
                            </div>
                        </div>
                        <div class="col is-full-mobile is-half-tablet is-half-desktop">
                            <div class="project" style="background-image: url(/media/projects/cover-mentorme.jpg)">
                                <a href="{{ localizedRoute('projects.view', ['slug' => 'mentorme-live-video-tuition']) }}"><h3 class="project__title">mentor.me</h3></a>
                            </div>
                        </div>
                        <div class="col is-full-mobile is-half-tablet is-one-quarter-desktop">
                            <div class="project" style="background-image: url(/media/projects/cover-idea.jpg)">
                                <a href="{{ localizedRoute('projects.view', ['slug' => 'idea-elearning-software']) }}"><h3 class="project__title">IDEA</h3></a>
                            </div>
                        </div>
                        <div class="col is-full-mobile is-half-tablet is-one-quarter-desktop">
                            <div class="project" style="background-image: url(/media/projects/cover-profnet.jpg)">
                                <a href="{{ localizedRoute('projects.view', ['slug' => 'profnet-elearning-platform']) }}"><h3 class="project__title">PROFNET</h3></a>
                            </div>
                        </div>
                        <div class="col is-hidden-mobile is-hidden-tablet-only is-one-quarter-desktop">
                            <div class="project is-stat">
                                <span class="project__stat__sub">deployed in</span>
                                <span class="project__stat__main">11</span>
                                <span class="project__stat__sub">countries</span>
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
        "description": "{{ config('site.description.' . config('app.locale')) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
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
                    "name": "Homepage"
                }
            },
            {
                "@type": "ListItem",
                "position": "2",
                "item": {
                    "@id": "{{ localizedRoute('projects') }}",
                    "name": "Our work"
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
        "description": "{{ config('site.description.' . config('app.locale')) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    },
    "description": "Our projects are what define us. We are proud of our work and shared some of them as case studies for you to read. If you like what you see, let us know and we can show you more.",
    "headline": "Our work",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Custom software development, Web design",
    "mainEntityOfPage": "{{ localizedRoute('projects') }}",
    "name": "Our work",
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
        "description": "{{ config('site.description.' . config('app.locale')) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
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
                "name": "Homepage"
            }
        },
        {
            "@type": "ListItem",
            "position": "2",
            "item": {
                "@id": "{{ localizedRoute('projects') }}",
                "name": "Our work"
            }
        }
    ]
}
</script>
@endpush
