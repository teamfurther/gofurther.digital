@extends('en.site')

@section('title', 'Our solutions')
@section('description', 'Grow your business and sales with our suite of custom solutions. By analysing and understanding your organisation\'s workflow we can develop software that helps automate your day-to-day operations.')

@section('content')
    <section class="section">
        <div class="solution__nav solution__nav--sales-operations">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Our solutions</h1>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h2 class="solution__nav__title">Sales &amp; Operations</h2>
                        <nav class="solution__nav__items">
                            <a href="{{ localizedRoute('solutions.crm') }}">CRM</a>
                            <a href="{{ localizedRoute('solutions.sales') }}">Sales</a>
                            <a href="{{ localizedRoute('solutions.projects') }}">Projects</a>
                            <a href="{{ localizedRoute('solutions.accounting') }}">Accounting</a>
                            <a href="{{ localizedRoute('solutions.purchase') }}">Purchase &amp; Inventory</a>
                            <a href="{{ localizedRoute('solutions.plm') }}">PLM</a>
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
                        <h2 class="solution__nav__title">Communication &amp; Productivity</h2>
                        <nav class="solution__nav__items">
                            <a href="{{ localizedRoute('solutions.communication') }}">Communication</a>
                            <a href="{{ localizedRoute('solutions.time-tracking') }}">Time Tracking</a>
                            <a href="{{ localizedRoute('solutions.hr') }}">Human Resources</a>
                            <a href="{{ localizedRoute('solutions.dms') }}">Document Management</a>
                            <a href="{{ localizedRoute('solutions.wiki') }}">Knowledge Center</a>
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
                        <h2 class="solution__nav__title">Web &amp; Mobile</h2>
                        <nav class="solution__nav__items">
                            <a href="{{ localizedRoute('solutions.mvp') }}">MVP Development</a>
                            <a href="{{ localizedRoute('solutions.mobile') }}">Mobile Apps</a>
                            <a href="{{ localizedRoute('solutions.chronos') }}">Custom Websites - Chronos CMS</a>
                            <a href="{{ localizedRoute('solutions.ecommerce') }}">eCommerce</a>
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
                    "@id": "{{ localizedRoute('solutions') }}",
                    "name": "Our Solutions"
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
    "description": "Grow your business and sales with our suite of custom solutions. By analysing and understanding your organisation's workflow we can develop software that helps automate your day-to-day operations.",
    "headline": "Our Solutions",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Custom software development, Software development, Web development, MVP development, Digital transformation",
    "mainEntityOfPage": "{{ localizedRoute('solutions') }}",
    "name": "Our Solutions",
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
                "@id": "{{ localizedRoute('solutions') }}",
                "name": "Our Solutions"
            }
        }
    ]
}
</script>
@endpush
