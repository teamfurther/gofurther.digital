@extends('hu.site', ['bodyClass' => 'has-hero'])

@section('content')
    <section class="hero">
        <h2 class="hero__tagline" data-texts='["automatizálni folyamataidat", "rendszerezni adataidat", "növelni produktivitásodat"]'>Segítünk<strong></strong></h2>
        <a class="hero__cta" href="{{ url('#contact') }}">Van egy ötleted, amit meg szeretnél velünk beszélni?<strong>Írd meg nekünk!</strong></a>
        <a class="hero__scroll" href="{{ url('#szolgaltatasok') }}"></a>
    </section>

    <section class="section" id="services">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="hero-heading">A hosszútávú<strong><span class="is-hidden-mobile">fejlesztési </span>partnereid</strong></h2>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column has-text-centered is-3-mobile is-2-tablet is-offset-2-tablet is-1-desktop is-offset-3-desktop">
                    <img src="{{ asset('img/home-services-digital-transformation-icon.png') }}" alt="Digital transformation" />
                </div>
                <div class="column is-9-mobile is-6-tablet is-5-desktop">
                    <h3 class="heading-4">Digitális<br />transzformáció</h3>
                    <p>
                        A digitalizáció minden iparra hatással lesz. Megmutatjuk, hogyan segítheti a digitalizáció a Te vállalkozásodat és hogyan használhatod ki az ezzel járó lehetőségeket.
                    </p>
                    <a class="btn is-pearl" href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-1-resz-bevezeto']) }}">Tovább</a>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column has-text-centered is-3-mobile is-2-tablet is-offset-2-tablet is-1-desktop is-offset-3-desktop">
                    <img src="{{ asset('img/home-services-custom-development-icon.png') }}" alt="Custom software development" />
                </div>
                <div class="column is-9-mobile is-6-tablet is-5-desktop">
                    <h3 class="heading-4">Egyedi<br />szoftverfejlesztés</h3>
                    <p>
                        Minden egyedi fejlesztési igényednek eleget tudunk tenni a követelmények megfogalmazásától a tervezésig és a megvalósításig.
                    </p>
                    <a class="btn is-pearl" href="{{ localizedRoute('custom-development') }}">Tovább</a>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column has-text-centered is-3-mobile is-2-tablet is-offset-2-tablet is-1-desktop is-offset-3-desktop">
                    <img src="{{ asset('img/home-services-mvp-development-icon.png') }}" alt="MVP development" />
                </div>
                <div class="column is-9-mobile is-6-tablet is-5-desktop">
                    <h3 class="heading-4">MVP<br />fejlesztés</h3>
                    <p>
                        Agilis technikákat és tervezői gondolkodásmódot használva rövid időn belül működő megoldásokat szállítunk, amelyek lehetővé teszik számodra, hogy hamar mérhető eredményeket lássál.
                    </p>
                    <a class="btn is-pearl" href="{{ localizedRoute('solutions.mvp') }}">Tovább</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="cta cta--projects">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="container">
                            <div class="heading-2">Szeretnél többet megtudni munkáinkról?</div>
                            <a class="btn is-large is-pearl" href="{{ localizedRoute('projects') }}">Esettanulmányok</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="hero-heading">Amiben a legjobbak vagyunk<strong>Laravel + Vue.js</strong></h2>
                </div>
            </div>
            <div class="columns">
                <div class="column has-margin-b0 is-5-tablet is-offset-1-tablet">
                    <p>Imádjuk az olyan keretrendszereket mint a Laravel és a Vue.js. A gazdag funkcionalitásuknak köszönhetően lehetőve teszik számunkra, hogy csökkentsük a fejlesztési időket és költségeket. Komoly tudással és tapasztalattal rendelkezünk ezeknek az eszközöknek a használatában, ami segít a letisztult, karbantartható és skálázható kód írásában.</p>
                    <p>A Laravel a legnépszerűbb PHP keretrendszer, de a Vue.js is egyre kedveltebb a Javascript fejlesztők körében. Mindkettő hátterében egy fantasztikus közösség áll, amit mi is próbálunk támogatni, hozzájárulva a kódbázis fejlesztéséhez és közösségi projektekhez.</p>
                </div>
                <div class="column has-margin-b0 has-text-right is-5-tablet is-centered-vertical is-hidden-mobile">
                    <img src="{{ asset('img/home-laravel-vuejs.png') }}" alt="Laravel & Vue.js" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="cta cta--tech-stack">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="container">
                            <div class="heading-2">Tudj meg többet az általunk használt technológiákról!</div>
                            <a class="btn is-large is-pearl" href="{{ localizedRoute('tech-stack') }}">Eszköztár</a>
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
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "alternateName": "{{ config('site.company.name') }}",
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
    "description": "{{ config('site.description.' . getLang()) }}",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . getLang()) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, MVP fejlesztés, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('home') }}",
    "name": "{{ config('site.name') }} | {{ config('site.title.' . getLang()) }}",
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
    },
    "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
    "url": "{{ config('app.url') }}"
}
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "alternateName": "{{ config('site.company.name') }}",
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
        "url": "https://gofurther.digital"
    },
    "creator": {
        "@type": "Organization",
        "alternateName": "{{ config('site.company.name') }}",
        "name": "Further Digital Solutions"
    },
    "description": "{{ config('site.description.' . getLang()) }}",
    "image": "{{ asset('img/logo.svg') }}",
    "name": "Further Digital Solutions",
    "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
    "url": "{{ config('app.url') }}"
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
                "@id": "{{ config('app.url') }}",
                "name": "Főoldal"
            }
        }
    ]
}
</script>
@endpush
