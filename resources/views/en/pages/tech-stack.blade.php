@extends('en.site')

@section('title', 'Tech and tools we know')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Our Tools</h1>
                </div>
            </div>
            <div class="columns">
                <div class="column has-margin-b0 is-half-tablet is-one-quarter-desktop">
                    <h2 class="heading-4 has-margin-b0">PHP</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Laravel</li>
                        <li>Lumen</li>
                        <li>Symfony</li>
                        <li>Drupal</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Databases</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>MySQL, MariaDB</li>
                        <li>PostgreSQL</li>
                        <li>MongoDB</li>
                        <li>redis</li>
                    </ul>
                </div>
                <div class="column has-margin-b0 is-half-tablet is-one-quarter-desktop">
                    <h2 class="heading-4 has-margin-b0">Client-side JS</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Vue.js</li>
                        <li>React</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Server-side JS</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Node.js</li>
                        <li>socket.io</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Java</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Spring Framework</li>
                    </ul>
                </div>
                <div class="column has-margin-b0 is-half-tablet is-one-quarter-desktop">
                    <h2 class="heading-4 has-margin-b0">Cross-platform mobile</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>NativeScript</li>
                        <li>ReactNative</li>
                        <li>Electron</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Native mobile</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Swift</li>
                        <li>Objective C</li>
                        <li>Kotlin</li>
                        <li>Java</li>
                    </ul>
                </div>
                <div class="column has-margin-b0 is-half-tablet is-one-quarter-desktop">
                    <h2 class="heading-4 has-margin-b0">Cloud & DevOps</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>GIT</li>
                        <li>CI/CD</li>
                        <li>nginx</li>
                        <li>Apache</li>
                        <li>Docker</li>
                        <li>Amazon AWS</li>
                        <li>Linode, DigitalOcean</li>
                        <li>Cloudflare</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="cta cta--services">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="container">
                            <div class="heading-2">Want to know how we can help you?</div>
                            <a class="btn is-large is-pearl" href="{{ localizedRoute('solutions') }}">Read on</a>
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
                    "@id": "{{ localizedRoute('tech-stack') }}",
                    "name": "Our Tools"
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
    "description": "{{ config('site.description.' . config('app.locale')) }}",
    "headline": "Our Tools",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Custom software development, Software development, Web development, MVP development, Digital transformation",
    "mainEntityOfPage": "{{ localizedRoute('tech-stack') }}",
    "name": "Our Tools",
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
                "@id": "{{ localizedRoute('tech-stack') }}",
                "name": "Our Tools"
            }
        }
    ]
}
</script>
@endpush
