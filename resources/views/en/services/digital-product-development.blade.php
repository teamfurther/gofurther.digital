@extends('en.site', ['bodyClass' => 'has-hero'])

@section('title', 'Digital product development for start-ups')
@section('description', 'You have a great idea and want to get to market fast and right? Further will help you build your prototypes and grow into the next big thing.')

@section('content')
    <section class="hero is-raspberry">
        <h2 class="hero-heading">
            Your idea.<br />
            Build it. Scale it.<br />
            <strong class="is-tangerine">Go Further.</strong>
        </h2>
        <a class="hero__cta" href="{{ localizedRoute('contact') }}">
            We'd love to listen to your product idea!<strong>Let's talk</strong>
        </a>
        <a class="hero__scroll" href="{{ url('#intro') }}"></a>
    </section>

    <section class="section is-dark" id="intro">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12-tablet is-5-widescreen">
                    <h2 class="hero-heading">
                        Do you need a tech team to build your <strong class="is-raspberry">awesome ideas?</strong>
                    </h2>
                </div>
                <div class="column is-offset-1-widescreen">
                    <p>
                        You have a great start-up idea that you believe will be the next big thing, but you don't know where to start. Or, you might be missing some of the necessary capabilities to see the project through.
                    </p>
                    <p>
                        This is where we come in. We can guide you through the whole process, end-to-end, from concept validation to growing your start-up into a household name.
                    </p>
                    <p>
                        We can organize design sprints to find answers to your critical business questions like product-market fit and go-to market strategies, or production sprints where we build working prototypes in short, fast-paced deliveries.
                    </p>
                    <p>
                        Of course, we're not jack of all trades. We can't be experts of every field necessary to make a start-up successful. This is why we partnered up with some of the best people in the local start-up eco-system: marketing experts, service designers, accelerators. You name it, we know them!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12-tablet is-5-widescreen">
                    <h2 class="hero-heading">
                        We use <strong class="is-cobalt">design thinking</strong> as our proven approach.
                    </h2>
                </div>
                <div class="column is-offset-1-widescreen">
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-product-development-discover-icon.png') }}" alt="Digital product development - Discover" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Discover</h3>
                            <p>
                                Discovery is the first and most important phase of building a software product.
                            </p>
                            <p>
                                It can be further broken down into an empathize stage — where we conduct research to develop an understanding of the market and users — and a define stage — where we synthesise all the research into a meaningful and actionable problem statement.
                            </p>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-product-development-ideate-icon.png') }}" alt="Digital product development - Ideate" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Ideate</h3>
                            <p>
                                Once we know what problems we want to solve, we start thinking about possible solutions.
                            </p>
                            <p>
                                It's important to have a judgement-free environment: there is no such thing as a bad idea. Actually, it's the craziest ones that usually make the best products.
                            </p>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-product-development-prototype-and-test-icon.png') }}" alt="Digital product development - Prototype and test" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Prototype<br />and test</h3>
                            <p>
                                This is where we start building real, tactile representations of your concepts, then return to the users for feedback.
                            </p>
                            <p>
                                If the prototypes work, then great! We'll move to the next step. If the feedback is negative though, we move back to the ideation phase.
                            </p>
                            <p>
                                If the issues uncovered by the users are deeper, it might be necessary to go all the way back to the discovery phase, do some more research and reformulate the problems.
                            </p>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-product-development-implement-icon.png') }}" alt="Digital product development - Implement" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Implement</h3>
                            <p>
                                The concept has been validated and we can finally put the vision into effect. Good times!
                            </p>
                            <p>
                                Our designers will bring your prototypes to life, while the development team will choose the right architecture for your software product. Let the coding commence!
                            </p>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-product-development-evolve-icon.png') }}" alt="Digital product development - Evolve" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Evolve</h3>
                            <p>
                                Most think the process end here. But not you, you're smart. Once you on-board your first customers, you start gathering data and observing how they interact with your product.
                            </p>
                            <p>
                                We'll help you analyse the feedback and metrics, and make adjustments to improve your product. The whole process starts over again with the empathize stage.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact', [
        'buttonText' => 'Let\'s build something',
        'headingText' => 'We\'d love to help bring your product ideas to life'
    ])

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-tangerine">Success stories</strong> from our pleased customers:
                    </h2>
                </div>
            </div>
            <div class="columns has-margin-b60">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="testimonial__picture" src="{{ asset('img/testimonials-brian-dubb.png') }}" alt="Centralized Brian Dubb testimonial" />
                    <blockquote class="testimonial__content">
                        <p>
                            Further developed our MVP quickly and within budget, which led to the on-boarding of our beta testing users and another round of investment. We're very pleased to have stayed with Further for the second release.
                        </p>
                        <cite class="testimonial__author">Brian DUBB, Centralized</cite>
                    </blockquote>
                </div>
            </div>
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="testimonial__picture is-right-aligned" src="{{ asset('img/testimonials-attila-szegedi.png') }}" alt="Brewie Attila Szegedi testimonial" />
                    <blockquote class="testimonial__content">
                        <p>
                            Further customized their own CMS called Chronos to suit our needs. It now serves as the core of our knowledge platform. The platform is working perfectly, allowing us to store and share a huge amount of information about our machine and beer brewing.
                        </p>
                        <cite class="testimonial__author">Attila SZEGEDI, Brewie</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.projects')
@endsection



@push('structured-data')
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
                    "@id": "{{ localizedRoute('services.digital-product-development') }}",
                    "name": "Digital Product Development"
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
    "description": "You have a great idea and want to get to market fast and right? Further will help you build your prototype and grow into the next big thing.",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Digital product development, MVP, Minimum Viable Product, MLP, Minimum Lovable Product, Start-up, Startup",
    "mainEntityOfPage": "{{ localizedRoute('services.digital-product-development') }}",
    "name": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
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
    },
    "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
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
                "name": "Homepage"
            }
        },
        {
            "@type": "ListItem",
            "position": "2",
            "item": {
                "@id": "{{ localizedRoute('services.digital-product-development') }}",
                "name": "Digital Product Development"
            }
        }
    ]
}
</script>
@endpush
