@extends('en.site')

@section('title', 'Meet Our Team')
@section('description', 'Meet the friendly people behind Further.')

@section('content')
    <section class="section has-padding-b0">
        <div class="container">
            <div class="columns">
                <div class="column is-7-tablet">
                    <h2 class="hero-heading has-margin-b15">
                        Nice to <strong class="is-raspberry">meet you!</strong>
                    </h2>
                </div>
            </div>
        </div>

        <div class="panel is-raspberry">
            <div class="container">
                <div class="columns about__top__background">
                    <div class="column is-7-tablet is-6-widescreen">
                        <p><strong>Szia!</strong> That's our word for hello. Whether you meet us Hungarians in cosmopolitan Budapest or in gorgeous Transylvania<sup><a class="is-white" href="https://en.wikipedia.org/wiki/Hungarians_in_Romania" target="_blank">*</a></sup>, you're going to be immediately greeted with a loud szia and a broad smile.</p>
                        <p>We're proud of our roots and this type of hospitality and cordiality are values we share within our team. So come on, and meet the friendly members of our team who are going to help you on your next project!</p>
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
                        <h4 class="about__team__member__name">Eszter Balla</h4>
                        <div class="about__team__member__title">Head of Client Relationships</div>
                    </div>
                </div>
                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                    <div class="about__team__member">
                        <img class="about__team__member__picture" src="{{ asset('img/team-peter-illes.png') }}" alt="Péter Illés" />
                        <h4 class="about__team__member__name">Peter Illés</h4>
                        <div class="about__team__member__title">Head of Strategy</div>
                    </div>
                </div>
                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                    <div class="about__team__member">
                        <img class="about__team__member__picture" src="{{ asset('img/team-norbert-zsombori.png') }}" alt="Norbert Zsombori" />
                        <h4 class="about__team__member__name">Norbert Zsombori</h4>
                        <div class="about__team__member__title">Head of Development</div>
                    </div>
                </div>
                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                    <div class="about__team__member">
                        <img class="about__team__member__picture" src="{{ asset('img/team-noci-pal.png') }}" alt="Nóci Pál" />
                        <h4 class="about__team__member__name">Nóci Pál</h4>
                        <div class="about__team__member__title">UX Designer</div>
                    </div>
                </div>
                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                    <div class="about__team__member">
                        <img class="about__team__member__picture" src="{{ asset('img/team-csongor-ur.png') }}" alt="Csongor Ur" />
                        <h4 class="about__team__member__name">Csongor Ur</h4>
                        <div class="about__team__member__title">Software Developer</div>
                    </div>
                </div>
                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                    <div class="about__team__member">
                        <img class="about__team__member__picture" src="{{ asset('img/team-zsolt-janes.png') }}" alt="Zsolt Janes" />
                        <h4 class="about__team__member__name">Zsolt Janes</h4>
                        <div class="about__team__member__title">Software Developer</div>
                    </div>
                </div>
                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                    <div class="about__team__member">
                        <img class="about__team__member__picture" src="{{ asset('img/team-arpad-szakali-vandor.png') }}" alt="Árpád Szakáli-Vándor" />
                        <h4 class="about__team__member__name">Árpád Szakáli-Vándor</h4>
                        <div class="about__team__member__title">Software Developer</div>
                    </div>
                </div>
                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                    <div class="about__team__member">
                        <img class="about__team__member__picture" src="{{ asset('img/team-zoltan-sarosi.png') }}" alt="Zoltán Sárosi" />
                        <h4 class="about__team__member__name">Zoltán Sárosi</h4>
                        <div class="about__team__member__title">Software Developer</div>
                    </div>
                </div>
                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                    <div class="about__team__member">
                        <img class="about__team__member__picture" src="{{ asset('img/team-veronika-danos.png') }}" alt="Veronika Dános" />
                        <h4 class="about__team__member__name">Veronika Dános</h4>
                        <div class="about__team__member__title">Business Development</div>
                    </div>
                </div>
                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                    <div class="about__team__member">
                        <img class="about__team__member__picture" src="{{ asset('img/team-gergely-fenyvesi.png') }}" alt="Gergő Fenyvesi" />
                        <h4 class="about__team__member__name">Gergő Fenyvesi</h4>
                        <div class="about__team__member__title">Marketing Coordinator</div>
                    </div>
                </div>
                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                    <div class="about__team__member">
                        <img class="about__team__member__picture" src="{{ asset('img/team-foerdi.png') }}" alt="Fördi" />
                        <h4 class="about__team__member__name">Fördi</h4>
                        <div class="about__team__member__title">Head of Recreation</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark" id="how-we-work">
        <div class="container">
            <div class="columns is-reversed-tablet">
                <div class="column is-8-widescreen is-offset-1-widescreen">
                    <h2 class="hero-heading">
                        Get to know <strong class="is-tangerine">how we work</strong>
                    </h2>

                    <p>To have a highly successful digital product, you need to have 3 key areas in check: business, technology and user experience (UX). Our value as a full-service digital product agency is bringing all 3 of these elements under the same roof.</p>
                    <p>At Further we are focused on providing customer-centric digital solutions: we take our time to better understand your business, which in turn allows us to build software solutions that are tailored specifically to your needs.</p>
                    <p>Openness, honesty and sharing knowledge are the values we believe in and which make us ideal long-term partners.</p>
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
                        We're <strong class="is-raspberry">proficient</strong> in Laravel + Vue.js
                    </h2>

                    <p>We love frameworks like Laravel and Vue. Their rich set of features and community contributed packages allow us to reduce development times and costs. We also have a deep understanding of how these tools work, which helps us write clean, maintainable and scalable code.</p>
                    <p>Laravel is the most popular PHP framework, while Vue is quickly becoming a favourite among Javascript developers. They both have an outstanding community supporting them, and here at Further, we're making an effort to give back by contributing to code and community projects alike.</p>
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
            <div class="heading-3">We are proud organisers of <br class="is-hidden-touch is-hidden-fullhd" />the Laravel Hungary meetup!</div>
        </div>
    </section>

    <section class="section" id="tech-stack">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Our tools of the trade</h1>
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
                    <h2 class="heading-4 has-margin-b0">Mobile</h2>
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
                    <h2 class="heading-4 has-margin-b0">Cloud & DevOps</h2>
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
                    "@id": "{{ localizedRoute('about') }}",
                    "name": "Our team"
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
    "description": "At Further we are focused on providing customer-centric digital solutions: we take our time to better understand your business, which in turn allows us to build software solutions that are tailored specifically to your needs.",
    "headline": "About Further: Our Story and Development Process",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Digital product development, MVP development, Custom software development, Software development, Web development, UX research, UX design, UI design, Digital transformation",
    "mainEntityOfPage": "{{ localizedRoute('about') }}",
    "name": "About Further: Our Story and Development Process",
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
                "@id": "{{ localizedRoute('about') }}",
                "name": "Our team"
            }
        }
    ]
}
</script>
@endpush
