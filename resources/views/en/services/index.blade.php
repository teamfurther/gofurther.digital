@extends('en.site', ['bodyClass' => 'has-hero'])

@section('content')
    <section class="hero hero--background-2 is-raspberry">
        <h2 class="hero-heading">
            From <strong class="is-tangerine">idea to execution</strong><br />
            and beyond.
        </h2>

        <a class="hero__cta" href="{{ localizedRoute('contact') }}">
            We'd love to listen to your product idea!<strong>Let's talk</strong>
        </a>

        <a class="hero__scroll" href="#services"></a>
    </section>

    <section class="section has-padding-b60 has-padding-t0" id="services">
        <div class="container">
            <div class="columns">
                <div class="column is-6-tablet">
                    <div class="columns services__service" id="strategy-and-research">
                        <div class="column">
                            <h2 class="heading-1 has-margin-b30">
                                Strategy & Research
                            </h2>
                            <div class="services__outcome">
                                What you'll get → <span>Validated idea</span>, <span>Product strategy</span>
                            </div>

                            <p>Together, we start by exploring your vision. We'll break up your idea into problems and challenges we need to solve and then put everything back together by creating a product strategy.</p>
                            <p class="has-margin-b60">One of the core activities in this phase is getting to know your users by conducting user interviews and panels to validate the concept.</p>

                            <a class="btn has-margin-b5">Discovery Workshop</a>
                            <a class="btn has-margin-b5">Design Sprint</a>
                        </div>
                    </div>
                    <div class="columns services__service" id="ux-research-and-design">
                        <div class="column">
                            <h2 class="heading-1 has-margin-b30 has-margin-t90">
                                UX Research & Design
                            </h2>
                            <div class="services__outcome">
                                What you'll get → <span>Wireframes</span>, <span>UI Designs</span>
                            </div>

                            <p>This is where we start building real, tactile representations of your concepts, then return to the users for feedback. Exciting times!</p>
                            <p class="has-margin-b60">First off we create wireframes to establish information hierarchy and to give you an idea on how everything fits together. Then we add colours and interactions, finally bringing your project to life through beautiful and ergonomic UI designs.</p>

                            <a class="btn has-margin-b5" href="{{ localizedRoute('services.ux-audit') }}">
                                UX audit
                            </a>
                            <a class="btn has-margin-b5">UI Design</a>
                        </div>
                    </div>
                    <div class="columns services__service" id="digital-product-development">
                        <div class="column">
                            <h2 class="heading-1 has-margin-b30 has-margin-t90">
                                Digital Product Development
                            </h2>
                            <div class="services__outcome">
                                What you'll get → <span>Functional prototypes (MVP)</span>, <span>Market-ready product</span>
                            </div>
                            <p>If it lives in the digital space, we can build it! From no-code prototypes to further validate your concept, to a feature-rich mobile app or and AI-driven IoT solution, we've seen it all.</p>
                            <p class="has-margin-b60">By using agile and design thinking methods, we are able to swiftly deliver working solutions and allow you to see measurable value right away.</p>

                            <a class="btn has-margin-b5">No-code and low-code solutions</a>
                            <a class="btn has-margin-b5">Mobile apps</a>
                            <a class="btn has-margin-b5">Web apps</a>
                            <a class="btn has-margin-b5">SaaS products</a>
                        </div>
                    </div>
                </div>
                <div class="column is-hidden-mobile is-offset-1-tablet">
                    <div class="services__animated is-rotated-0">
                        <div class="services__animated--strategy-and-research"></div>
                        <div class="services__animated--ux-research-and-design"></div>
                        <div class="services__animated--digital-product-development"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.projects')

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
                    <div class="has-items-centered">
                        <img class="testimonial__picture has-margin-r15" src="{{ asset('img/testimonials-brian-dubb.png') }}" alt="Centralized Brian Dubb testimonial" />
                        <blockquote class="testimonial__content">
                            <p>Further developed our MVP quickly and within budget, which led to the on-boarding of our beta testing users and another round of investment. We're very pleased to have stayed with Further for the second release.</p>
                            <cite class="testimonial__author">Brian DUBB, Centralized</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="columns has-margin-b90">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <div class="has-items-centered is-reversed">
                        <img class="testimonial__picture has-margin-l15 is-right-aligned" src="{{ asset('img/testimonials-attila-szegedi.png') }}" alt="Brewie Attila Szegedi testimonial" />
                        <blockquote class="testimonial__content">
                            <p>Further customized their own CMS called Chronos to suit our needs. It now serves as the core of our knowledge platform. The platform is working perfectly, allowing us to store and share a huge amount of information about our machine and beer brewing.</p>
                            <cite class="testimonial__author">Attila SZEGEDI, Brewie</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-form')
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
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Digital product development, MVP development, Custom software development, Software development, Web development, UX research, UX design, UI design, Digital transformation",
    "mainEntityOfPage": "{{ localizedRoute('home') }}",
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
        "url": "https://gofurther.digital"
    },
    "creator": {
        "@type": "Organization",
        "alternateName": "{{ config('site.company.name') }}",
        "name": "Further Digital Solutions"
    },
    "description": "{{ config('site.description.' . config('app.locale')) }}",
    "image": "{{ asset('img/logo.svg') }}",
    "name": "Further Digital Solutions",
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
        }
    ]
}
</script>
@endpush
