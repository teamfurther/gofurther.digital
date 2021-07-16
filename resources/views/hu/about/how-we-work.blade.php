@extends('hu.site')

@section('title', 'Módszereink és eszköztárunk')
@section('description', 'Célunk ügyfeleink üzleti növekedésének segítése innovatív megoldások és kiváló minőségű szoftverek szolgáltatásával. Az állandó kommunikáció, a szenvedély és a közvetlenség olyan értékek, melyekben hiszünk, és amelyek ideális hosszú távú partnerekké tesznek minket.')

@section('content')
    <section class="section">
        <div class="about">
            <div class="container">
                <div class="columns">
                    <div class="column is-8-desktop is-offset-2-desktop">
                        <h1 class="hero-heading">
                            Ismerd meg<br /><strong class="is-tangerine">hogyan dolgozunk</strong>
                        </h1>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-6-tablet is-5-desktop is-offset-2-desktop">
                        <p>
                            A Further Digital Solutionsnél ügyfélközpontú megoldások kidolgozására fókuszálunk: időt szakítunk arra, hogy megismerjük a vállalkozásod, így olyan testreszabott szoftvereket fejlesztünk, melyek a Te konkrét igényeid szolgálják ki.
                        </p>
                        <p>
                            Célunk ügyfeleink üzleti növekedésének segítése innovatív megoldások és kiváló minőségű szoftverek szolgáltatásával. Az állandó kommunikáció, a szenvedély és a közvetlenség olyan értékek, melyekben hiszünk, és amelyek ideális hosszú távú partnerekké tesznek minket.
                        </p>
                    </div>
                    <div class="about__stats is-hu">
                        <span class="about__stat about__stat--1"><strong>{{ config('site.stats.projects') }}+</strong>projekt</span>
                        <span class="about__stat about__stat--2"><strong>{{ config('site.stats.clients') }}</strong>ügyfél</span>
                        <span class="about__stat about__stat--3"><strong>{{ config('site.stats.countries') }}</strong>országban</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.booklet')

    <section class="section" id="hogyan-dolgozunk">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading">Hogyan dolgozunk?</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet is-offset-2-tablet">
                    <p class="has-margin-b60">
                        Agilis technikákat és tervezői gondolkodásmódot használva rövid időn belül működő megoldásokat szállítunk, melyek lehetővé teszik számodra, hogy hamar mérhető eredményeket lássál.
                    </p>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet is-offset-2-tablet">
                    <div class="about__process">
                        <span class="about__process__step about__process__step--1">
                            <strong>Megismerés</strong>
                            Felmérjük az üzleti igényeket és folyamatokat.
                        </span>
                        <span class="about__process__step about__process__step--2">
                            <strong>Ötletelés</strong>
                            Megoldásokat keresünk a meghatározott problémákra.
                        </span>
                        <span class="about__process__step about__process__step--3">
                            <strong>Validáció</strong>
                            Prototípusokat tervezünk, hogy teszteljük a kezdeti ötleteket.
                        </span>
                        <span class="about__process__step about__process__step--4">
                            <strong>Megvalósítás</strong>
                            Lefejlesztjük a validált megoldásokat.
                        </span>
                        <span class="about__process__step about__process__step--5">
                            <strong>Fenntarthatóság</strong>
                            Mérjük az eredményeket és továbbfejlesztjük a terméket.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark" id="laravel-vue">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-9-desktop">
                    <h2 class="hero-heading">
                        Further <strong class="is-raspberry">❤</strong> Laravel + Vue.
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet">
                    <p>Imádjuk az olyan keretrendszereket mint a Laravel és a Vue. A gazdag funkcionalitásuknak köszönhetően lehetőve teszik számunkra, hogy csökkentsük a fejlesztési időket és költségeket. Komoly tudással és tapasztalattal rendelkezünk ezeknek az eszközöknek a használatában, ami segít a letisztult, karbantartható és skálázható kód írásában.</p>
                    <p>A Laravel a legnépszerűbb PHP keretrendszer, de a Vue is egyre kedveltebb a Javascript fejlesztők körében. Mindkettő hátterében egy fantasztikus közösség áll, amit mi is próbálunk támogatni, hozzájárulva a kódbázis fejlesztéséhez és közösségi projektekhez.</p>
                </div>
                <div class="column has-text-right is-4-tablet is-centered-vertical is-hidden-mobile">
                    <img src="{{ asset('img/home-laravel-vuejs.png') }}" alt="Laravel & Vue" />
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="eszkoztar">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Eszköztárunk</h1>
                </div>
            </div>
            <div class="columns">
                <div class="column has-margin-b0 is-half-tablet is-one-quarter-desktop">
                    <h2 class="heading-4 has-margin-b0">PHP</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Laravel</li>
                        <li>Lumen</li>
                        <li>Statamic</li>
                        <li>Symfony</li>
                        <li>Drupal</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Adatbázisok</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>MySQL, MariaDB</li>
                        <li>PostgreSQL</li>
                        <li>MongoDB</li>
                        <li>redis</li>
                    </ul>
                </div>
                <div class="column has-margin-b0 is-half-tablet is-one-quarter-desktop">
                    <h2 class="heading-4 has-margin-b0">Kliensoldali JS</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Vue</li>
                        <li>React</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Szerveroldali JS</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Node.js</li>
                        <li>socket.io</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Python</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Django</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Java</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Spring</li>
                    </ul>
                </div>
                <div class="column has-margin-b0 is-half-tablet is-one-quarter-desktop">
                    <h2 class="heading-4 has-margin-b0">Mobilfejlesztés</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Flutter</li>
                        <li>ReactNative</li>
                        <li>Swift</li>
                        <li>Kotlin</li>
                        <li>Cordova</li>
                        <li>Electron</li>
                    </ul>
                </div>
                <div class="column has-margin-b0 is-half-tablet is-one-quarter-desktop">
                    <h2 class="heading-4 has-margin-b0">Felhő és DevOps</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>GIT</li>
                        <li>CI/CD</li>
                        <li>nginx, Apache</li>
                        <li>Docker, Kubernetes</li>
                        <li>Amazon AWS, Microsoft Azure</li>
                        <li>Linode, DigitalOcean</li>
                        <li>Cloudflare</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact')
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
                    "@id": "{{ localizedRoute('about.how-we-work') }}",
                    "name": "Hogyan dolgozunk?"
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
    "headline": "Hogyan dolgozunk?",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, Digitális termékfejlesztés, MVP fejlesztés, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('about.how-we-work') }}",
    "name": "Hogyan dolgozunk?",
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
                "@id": "{{ localizedRoute('about.how-we-work') }}",
                "name": "Hogyan dolgozunk?"
            }
        }
    ]
}
</script>
@endpush
