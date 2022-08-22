@extends('hu.site')

@section('title', 'Csapatunk')
@section('description', 'Ismerd meg a mosolygós embereket a Further mögött.')

@section('content')
    <section class="section has-padding-b0">
        <div class="container">
            <div class="columns">
                <div class="column is-7-tablet">
                    <h2 class="hero-heading has-margin-b15">
                        <strong class="is-raspberry">Örvendünk</strong>, hogy megismerhetünk!
                    </h2>
                </div>
            </div>
        </div>

        <div class="panel is-raspberry">
            <div class="container">
                <div class="columns about__top__background">
                    <div class="column is-7-tablet is-6-widescreen">
                        <p>Szia! Bármelyik kollégánkkal beszélsz majd, biztos lehetsz abban, hogy egy széles mosollyal megfűszerezett sziával köszönt majd. Ez a fajta közvetlenség és barátságosság olyan érték, amely a teljes csapatunkat jellemzi.</p>
                        <p>Görgess tovább és ismerd meg azokat, akikkel együtt dolgozol majd a következő projekteden!</p>
                    </div>
                    <div class="column is-offset-1-widescreen is-offset-top is-hidden-mobile">
                        <img src="{{ asset('img/team-2.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
                <div class="columns is-mobile is-multiline">
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-eszter-balla.png') }}" alt="Eszter Balla" />
                            <h4 class="about__team__member__name">Balla Eszter</h4>
                            <div class="about__team__member__title">Ügyfélkapcsolati vezető<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-peter-illes.png') }}" alt="Péter Illés" />
                            <h4 class="about__team__member__name">Illés Péter</h4>
                            <div class="about__team__member__title">Stratégiai vezető</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-norbert-zsombori.png') }}" alt="Norbert Zsombori" />
                            <h4 class="about__team__member__name">Zsombori Norbert</h4>
                            <div class="about__team__member__title">Fejlesztési vezető</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-noci-pal.png') }}" alt="Nóci Pál" />
                            <h4 class="about__team__member__name">Pál Nóci</h4>
                            <div class="about__team__member__title">UX Designer</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-csongor-ur.png') }}" alt="Csongor Ur" />
                            <h4 class="about__team__member__name">Ur Csongor</h4>
                            <div class="about__team__member__title">Fejlesztő<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-zsolt-janes.png') }}" alt="Janes Zsolt" />
                            <h4 class="about__team__member__name">Janes Zsolt</h4>
                            <div class="about__team__member__title">Fejlesztő<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-arpad-szakali-vandor.png') }}" alt="Árpád Szakáli-Vándor" />
                            <h4 class="about__team__member__name">Szakáli-Vándor Árpád</h4>
                            <div class="about__team__member__title">Fejlesztő<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-zoltan-sarosi.png') }}" alt="Zoltán Sárosi" />
                            <h4 class="about__team__member__name">Sárosi Zoltán</h4>
                            <div class="about__team__member__title">Fejlesztő<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-veronika-danos.png') }}" alt="Veronika Dános" />
                            <h4 class="about__team__member__name">Dános Veronika</h4>
                            <div class="about__team__member__title">Üzletfejlesztés</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-gergely-fenyvesi.png') }}" alt="Gergő Fenyvesi" />
                            <h4 class="about__team__member__name">Fenyvesi Gergő</h4>
                            <div class="about__team__member__title">Marketing Koordinátor</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-foerdi.png') }}" alt="Fördi" />
                            <h4 class="about__team__member__name">Fördi</h4>
                            <div class="about__team__member__title">Kikapcsolódási vezető</div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="section is-dark" id="how-we-work">
        <div class="container">
            <div class="columns is-reversed-tablet">
                <div class="column is-8-tablet is-offset-1-widescreen">
                    <h2 class="hero-heading">
                        Ismerd meg <strong class="is-tangerine">hogyan dolgozunk</strong>
                    </h2>

                    <p>Egy digitális termék sikeréknek 3 kulcsa van: innovatív termékstratégia, megfelelő technológiai megoldás és kiváló felhasználói élmény (UX). A mi értékünk full-service digitális termékfejlesztő ügynökségként az, hogy mindhármat egy kézből biztosítjuk Neked.</p>
                    <p>A Further Digital Solutionsnél ügyfélközpontú megoldások kidolgozására fókuszálunk: időt szakítunk arra, hogy megismerjük a vállalkozásod, így olyan testreszabott szoftvereket fejlesztünk, melyek a Te konkrét igényeid szolgálják ki.</p>
                    <p>A nyitottság, az őszinteség és a tudásmegosztás olyan értékek, melyekben hiszünk, és amelyek ideális hosszú távú partnerekké tesznek minket.</p>
                </div>
                <div class="column">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-3.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-9.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.booklet')

    <section class="section" id="laravel-vue">
        <div class="container">
            <div class="columns">
                <div class="column is-8-tablet">
                    <h2 class="hero-heading">
                        Further <strong class="is-raspberry">❤</strong> Laravel + Vue.js
                    </h2>

                    <p>Imádjuk az olyan keretrendszereket mint a Laravel és a Vue. A gazdag funkcionalitásuknak köszönhetően lehetőve teszik számunkra, hogy csökkentsük a fejlesztési időket és költségeket. Komoly tudással és tapasztalattal rendelkezünk ezeknek az eszközöknek a használatában, ami segít a letisztult, karbantartható és skálázható kód írásában.</p>
                    <p>A Laravel a legnépszerűbb PHP keretrendszer, de a Vue is egyre kedveltebb a Javascript fejlesztők körében. Mindkettő hátterében egy fantasztikus közösség áll, amit mi is próbálunk támogatni, hozzájárulva a kódbázis fejlesztéséhez és közösségi projektekhez.</p>
                </div>
                <div class="column is-offset-1-widescreen">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-5.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-6.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section has-padding-b0">
        <div class="banner--laravel-meetup">
            <img src="{{ asset('img/laravel-meetup.png?v2') }}" alt="Laravel Hungary Meetup" />
            <div class="heading-3">A Further a Laravel Hungary <br class="is-hidden-touch is-hidden-fullhd" />meetup szervezője!</div>
        </div>
    </section>

    <section class="section" id="eszkoztar">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Eszköztárunk</h1>
                </div>
            </div>
            <div class="columns is-multiline">
                <div class="column has-margin-b0 is-half-tablet is-one-quarter-desktop">
                    <h2 class="heading-4 has-margin-b0">PHP</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Laravel</li>
                        <li>Statamic</li>
                        <li>Symfony</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Python</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Django</li>
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
                    <h2 class="heading-4 has-margin-b0">Client-side JS</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Vue.js</li>
                        <li>Nuxt.js</li>
                        <li>React</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Server-side JS</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Node.js</li>
                        <li>Nest.js</li>
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
                    "@id": "{{ localizedRoute('about') }}",
                    "name": "Rólunk"
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
    "description": "A Further Digital Solutionsnél ügyfélközpontú megoldások kidolgozására fókuszálunk: időt szakítunk arra, hogy megismerjük a vállalkozásod, így olyan testreszabott szoftvereket fejlesztünk, melyek a Te konkrét igényeid szolgálják ki.",
    "headline": "Csapatunk",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Digitális termékfejlesztés, MVP fejlesztés, Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, UX kutatás, UX design, UI design, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('about') }}",
    "name": "Csapatunk",
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
                "@id": "{{ localizedRoute('about') }}",
                "name": "Csapatunk"
            }
        }
    ]
}
</script>
@endpush
