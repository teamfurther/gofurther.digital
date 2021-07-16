@extends('en.site')

@section('title', 'Meet Our Team')
@section('description', 'Meet the friendly people behind Further.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet">
                    <h2 class="hero-heading">
                        Nice to meet <strong class="is-raspberry">you!</strong>
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-6-tablet is-5-desktop is-offset-1-tablet">
                    <p>
                        Szia! That's our word for hello. Whether you meet us Hungarians in cosmopolitan Budapest or in gorgeous Transylvania<sup><a href="https://en.wikipedia.org/wiki/Hungarians_in_Romania" target="_blank">*</a></sup>, you're going to be immediately greeted with a loud szia and a broad smile.
                    </p>
                    <p>
                        We're proud of our roots and this type of hospitality and cordiality are values we share within our team. So come on, and meet the friendly members of our team who are going to help you on your next project!
                    </p>
                </div>
                <div class="column is-hidden-mobile is-4-tablet is-offset-1-desktop has-text-centered">
                    <img src="{{ asset('img/about-szia.png') }}" alt="Nice to meet you" />
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
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
                        <div class="about__team__member__title">Software Developer</div>
                    </div>
                </div>
                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                    <div class="about__team__member">
                        <img class="about__team__member__picture" src="{{ asset('img/team-istvan-farkas.png') }}" alt="István Farkas" />
                        <h4 class="about__team__member__name">István Farkas</h4>
                        <div class="about__team__member__title">Software Developer</div>
                    </div>
                </div>
                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                    <div class="about__team__member">
                        <img class="about__team__member__picture" src="{{ asset('img/team-szabolcs-benedek.png') }}" alt="Szabolcs Benedek" />
                        <h4 class="about__team__member__name">Szabolcs Benedek</h4>
                        <div class="about__team__member__title">Software Developer</div>
                    </div>
                </div>
                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                    <div class="about__team__member">
                        <img class="about__team__member__picture" src="{{ asset('img/team-csaba-barabas.png') }}" alt="Csaba Barabás" />
                        <h4 class="about__team__member__name">Csaba Barabás</h4>
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
                        <img class="about__team__member__picture" src="{{ asset('img/team-zsolt-janes.png') }}" alt="Zsolt Janes" />
                        <h4 class="about__team__member__name">Zsolt Janes</h4>
                        <div class="about__team__member__title">Software Developer</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet">
                    <h2 class="hero-heading">
                        <strong class="is-pearl">Join</strong> our team
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-7-tablet is-offset-1-tablet is-6-desktop">
                    <p>We are always looking for passionate, creative and driven people to work with.</p>
                    <p>We believe that experience and knowledge should be shared, so we encourage communication between team members, attend conferences and hold regular workshops.</p>
                    <p><a href="{{ localizedRoute('contact') }}">Get to know us</a>, how we roll and what we love about our jobs.</p>
                    <p>At Further we hire for fit and ambition, rather than qualifications and degrees, so if you think you got what it takes, visit our <a href="{{ localizedRoute('jobs') }}">careers page</a>.</p>
                </div>
                <div class="column is-hidden-mobile is-3-tablet">
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
                    "@id": "{{ localizedRoute('about.team') }}",
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
    "mainEntityOfPage": "{{ localizedRoute('about.team') }}",
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
                "@id": "{{ localizedRoute('about.team') }}",
                "name": "Our team"
            }
        }
    ]
}
</script>
@endpush
