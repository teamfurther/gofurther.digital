@extends('en.site')

@section('title', 'Chronos CMS')
@section('description', 'We can build you beautiful, responsive, fast and SEO-ready landing pages and websites with the help of our very own headless CMS - Chronos.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column has-text-centered">
                        <img class="has-margin-b60" src="{{ asset('img/logo-chronos.svg') }}" alt="Chronos CMS" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Custom Websites with Chronos</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">We can build you beautiful, responsive, fast and SEO-ready landing pages and websites with the help of our very own headless CMS - Chronos.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet">
                        <h3 class="heading-3">No technical skills required</h3>
                        <p>Every page is basically a template. We provide you with a simple and intuitive interface to manage your content. Just upload your content and images and watch your website take shape.</p>
                        <ul class="list has-bullets">
                            <li>create content with a simple Markdown editor</li>
                            <li>save content as a draft and publish it later</li>
                            <li>SEO-ready: easily add titles and descriptions</li>
                            <li>upload images to a media library so you can reuse them later</li>
                            <li>upload one size image and let Chronos create thumbs on-the-fly</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/web-illustration-build-websites.png') }}" alt="Manage your content on a simple an intuitive interface" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half">
                    <h3 class="heading-3">Analyse results</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-half-tablet">
                    <p>Chronos makes it easy to analyse click-through and conversion rates. Optimise the targeting of your website or create A/B tests to determine which method brings in the most results.</p>
                    <ul class="list has-bullets">
                        <li>track click-through rates</li>
                        <li>track conversion rates</li>
                        <li>A/B tests</li>
                        <li>multivariate tests</li>
                    </ul>
                </div>
                <div class="column is-half-tablet">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/web-illustration-analytics.png') }}" alt="Track click-through and conversion rates" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-half-tablet">
                    <h3 class="heading-3">Multilingual out-of-the-box</h3>
                    <p>Chronos enables you to add as many languages as you wish for your website. Adding a new language is easy, just check a box in settings and you're ready to upload your content. Wunderbar!</p>
                    <ul class="list has-bullets">
                        <li>add a new language with just a few clicks</li>
                        <li>translate content and static strings of text</li>
                        <li>keep track of untranslated content</li>
                    </ul>
                </div>
                <div class="column is-half-tablet">
                    <img class="is-centered-mobile is-pulled-right" src="{{ asset('img/solutions/web-illustration-multilingual.png') }}" alt="Add as many languages as you wish for your website" />
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column is-offset-half">
                        <h3 class="heading-3">Headless, but not like a chicken</h3>
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-half-tablet">
                        <p>Chronos is a headless CMS. A headless or decoupled CMS is basically a backend-only system which makes content accessible via an API. This means it is completely frontend-agnostic, which has several advantages: you can use any programming language to build the frontend or even generate static pages. You can also easily connect it to other websites or a mobile app.</p>
                        <ul class="list has-bullets">
                            <li>use any programming language on the frontend</li>
                            <li>generate static websites</li>
                            <li>connect to other websites or apps</li>
                            <li>well-documented API</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile" src="{{ asset('img/solutions/web-illustration-headless.png') }}" alt="Take advantage of the decoupled architecture" />
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
                        <div class="heading-2">Do you want to learn more about Chronos?</div>
                        <a class="btn is-large is-primary" href="{{ url('#contact') }}">Ask for a demo</a>
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
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('solutions.chronos') }}",
                    "name": "Chronos CMS"
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
    "description": "We can build you beautiful, responsive, fast and SEO-ready websites with the help of our very own headless CMS - Chronos.",
    "headline": "Chronos CMS",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Chronos, CMS, Chronos CMS",
    "mainEntityOfPage": "{{ localizedRoute('solutions.chronos') }}",
    "name": "Chronos CMS",
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
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('solutions.chronos') }}",
                "name": "Chronos CMS"
            }
        }
    ]
}
</script>
@endpush
