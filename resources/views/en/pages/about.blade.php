@extends('en.site')

@section('title', 'About Further: Our Story and Development Process')
@section('description', 'Our goal is to help our customer\'s business grow by offering innovative solutions and providing top quality software. Constant communication, passion and flexibility are the values we believe in and which make us ideal long-term partners.')

@section('content')
    <section class="section">
        <div class="about">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">About us</h1>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-7-tablet is-half-desktop is-offset-2-desktop">
                        <p>At Further we are focused on providing customer-centric digital solutions: we take our time to better understand your business, which in turn allows us to build software solutions that are tailored specifically to your needs.</p>
                        <p>Our goal is to help our customer's business grow by offering innovative solutions and providing top quality software. Constant communication, passion and flexibility are the values we believe in and which make us ideal long-term partners.</p>
                    </div>
                    <div class="about__stats">
                        <span class="about__stat about__stat--1"><strong>{{ config('site.stats.projects') }}+</strong>projects</span>
                        <span class="about__stat about__stat--2"><strong>{{ config('site.stats.clients') }}</strong>clients</span>
                        <span class="about__stat about__stat--3"><strong>{{ config('site.stats.countries') }}</strong>countries</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.booklet')

    <section class="section" id="our-approach">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading">Our approach</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet is-offset-2-tablet">
                    <p>By using agile and design thinking methods, we are able to swiftly deliver working solutions and allow you to see measurable value right away.</p>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet is-offset-2-tablet">
                    <div class="about__process">
                        <span class="about__process__step about__process__step--1">
                            <strong>Discover</strong>
                            Understanding your business needs and requirements.
                        </span>
                        <span class="about__process__step about__process__step--2">
                            <strong>Ideate</strong>
                            Finding solutions to the problems defined.
                        </span>
                        <span class="about__process__step about__process__step--3">
                            <strong>Prototype and test</strong>
                            Designing prototypes to test our initial concepts.
                        </span>
                        <span class="about__process__step about__process__step--4">
                            <strong>Implement</strong>
                            Developing the validated features.
                        </span>
                        <span class="about__process__step about__process__step--5">
                            <strong>Evolve</strong>
                            Sustaining, measuring and improving your product.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.solutions')

    <section class="section">
        <div class="about__team">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h2 class="heading">Our team</h2>
                    </div>
                </div>
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
                            <h4 class="about__team__member__name">Péter Illés</h4>
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
                            <img class="about__team__member__picture" src="{{ asset('img/team-noemi-varga.png') }}" alt="Noémi Varga" />
                            <h4 class="about__team__member__name">Noémi Varga</h4>
                            <div class="about__team__member__title">Marketing Coordinator</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-csongor-ur.png') }}" alt="Csongor Ur" />
                            <h4 class="about__team__member__name">Csongor Ur</h4>
                            <div class="about__team__member__title">Software Engineer</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-zsolt-kalman.png') }}" alt="Zsolt Kálmán" />
                            <h4 class="about__team__member__name">Zsolt Kálmán</h4>
                            <div class="about__team__member__title">Solution Designer</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-csaba-barabas.png') }}" alt="Csaba Barabás" />
                            <h4 class="about__team__member__name">Csaba Barabás</h4>
                            <div class="about__team__member__title">Software Engineer</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-zoltan-sarosi.png') }}" alt="Zoltán Sárosi" />
                            <h4 class="about__team__member__name">Zoltán Sárosi</h4>
                            <div class="about__team__member__title">Software Engineer</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-zsolt-janes.png') }}" alt="Zsolt Janes" />
                            <h4 class="about__team__member__name">Zsolt Janes</h4>
                            <div class="about__team__member__title">Software Engineer</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-david-simon.png') }}" alt="Dávid Simon" />
                            <h4 class="about__team__member__name">Dávid Simon</h4>
                            <div class="about__team__member__title">Software Engineer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h3 class="heading">Join our team</h3>
                </div>
            </div>
            <div class="columns">
                <div class="column is-7-tablet is-5-desktop is-offset-2-desktop">
                    <p>We are always looking for passionate, creative and driven people to work with.</p>
                    <p>We believe that experience and knowledge should be shared, so we encourage communication between team members, attend conferences and hold regular workshops.</p>
                    <p><a href="{{ localizedRoute('contact') }}">Get to know us</a>, how we roll and what we love about our jobs.</p>
                    <p>At Further we hire for fit and ambition, rather than qualifications and degrees, so if you think you got what it takes, visit our <a href="{{ localizedRoute('jobs') }}">careers page</a>.</p>
                </div>
                <div class="column is-5-tablet is-hidden-mobile is-3-desktop">
                    <img class="is-pulled-right" src="{{ asset('img/join-our-team-illustration.png') }}" alt="Join our team" />
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.tech-stack')
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
                    "name": "About us"
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
    "description": "Our goal is to help our customer's business grow by offering innovative solutions and providing top quality software. Constant communication, passion and flexibility are the values we believe in and which make us ideal long-term partners.",
    "headline": "About Further: Our Story and Development Process",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Custom software development, Software development, Web development, Digital product development, MVP development, Digital transformation",
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
                "name": "About Us"
            }
        }
    ]
}
</script>
@endpush
