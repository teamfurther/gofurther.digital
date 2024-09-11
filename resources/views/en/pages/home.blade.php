@extends('en.site', ['bodyClass' => 'has-hero'])

@section('content')
    <section class="hero hero--background-1 is-cobalt">
        <h2 class="hero-heading">
            Your idea.<br />Build it. Scale it.
            <strong class="is-tangerine">Go Further.</strong>
        </h2>

        <a class="hero__cta" href="{{ localizedRoute('contact') }}">
            Have an idea you want to discuss?<strong>Let's talk</strong>
        </a>

        <a class="hero__scroll" href="#services"></a>
    </section>

    <section class="section has-padding-b30" id="services">
        <div class="container">
            <div class="columns">
                <div class="column is-6-tablet">
                    <h2 class="hero-heading">
                        We turn your ideas into digital products <strong class="is-pearl">that work.</strong>
                    </h2>

                    <p class="has-margin-b30">Our value as a full-service digital product agency is bringing business, user experience and technology under the same roof, guiding you through the whole product development process. <strong>From idea to execution and beyond.</strong></p>

                    <ul class="list has-bullets">
                        <li><a class="is-grey" href="{{ localizedRoute('services') }}#strategy-and-research">Strategy & Research</a></li>
                        <li><a class="is-grey" href="{{ localizedRoute('services') }}#ux-research-and-design">UX Research & Design</a></li>
                        <li><a class="is-grey" href="{{ localizedRoute('services') }}#digital-product-development">Digital Product Development</a></li>
                    </ul>
                </div>
                <div class="column is-offset-1-tablet">
                    <div class="services__static">
                        <a href="{{ localizedRoute('services') }}#strategy-and-research" class="services__static--strategy-and-research">
                            <span>Strategy<br />& Research</span>
                        </a>
                        <a href="{{ localizedRoute('services') }}#ux-research-and-design" class="services__static--ux-research-and-design">
                            <span>UX Research<br />& Design</span>
                        </a>
                        <a href="{{ localizedRoute('services') }}#digital-product-development" class="services__static--digital-product-development">
                            <span>Digital Product<br />Development</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark has-padding-b30" id="projects">
        <div class="container">
            <div class="columns has-margin-b30">
                <div class="column">
                    <h2 class="hero-heading has-text-centered">
                        Our <strong class="is-tangerine">success</strong> stories.
                    </h2>

                    <div class="columns is-mobile is-multiline has-text-centered">
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/png.png') }}" alt="Procter & Gamble" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/msd.png') }}" alt="MSD Pharma" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/samsung-engineering.png') }}" alt="Samsung Engineering" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/njoy.png') }}" alt="nJoy" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/praktiker.png') }}" alt="Praktiker Hungary" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/corvinus.png') }}" alt="Corvinus University of Budapest" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/harborsz.png') }}" alt="Harborsz Logistic" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/onrobot.png') }}" alt="OnRobot" />
                        </div>
                        <div class="column is-hidden-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/steiger.png') }}" alt="Steiger" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <a class="project-list__featured project-list__featured--njoy-the-hive"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'njoy-the-hive']) }}"
                    >
                        <div class="project-list__featured__content">
                            <h1 class="project-list__featured__title">nJoy - The Hive ERP</h1>
                            <div class="project-list__featured__description">
                                nJoy, a consumer electronics brand, quickly outgrew their existing software infrastructure and needed a custom-built integrated solution. They employed us to deliver a product lifecycle management tool, created from the ground up to fit their particular needs.
                            </div>
                            <span class="btn is-white">Explore the case study</span>
                        </div>

                        <img class="project-list__featured__image" src="{{ asset('media/projects/njoy-project-list.png') }}" alt="nJoy - The Hive ERP system - Rapid Product Development" />
                    </a>
                    <a class="project-list__featured project-list__featured--kompozit is-reversed"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'kompozit-field-service-management-app']) }}"
                    >
                        <div class="project-list__featured__content">
                            <h1 class="project-list__featured__title">Kompozit Field Service Management</h1>
                            <div class="project-list__featured__description">
                                Kompozit is a field service management solution for documenting the work of service teams in an easy and efficient way.
                            </div>
                            <span class="btn is-tangerine">Explore the case study</span>
                        </div>

                        <img class="project-list__featured__image" src="{{ asset('media/projects/kompozit-project-list.png') }}" alt="Kompozit Field Service Management App" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.projects', [
        'buttonText' => 'Explore our case studies',
        'headingText' => 'Want to see more projects?',
    ])

    <section class="section" id="our-approach">
        <div class="container">
            <div class="columns">
                <div class="column is-8">
                    <h2 class="hero-heading">
                        What can <strong class="is-raspberry">you expect?</strong>
                    </h2>

                    <p>A collaborative process. As opposed to a traditional agency, working with Further means you'll be involved from the very beginning and throughout the project. We find this is the best way to make sure we're building something you'll love and your users will love to use.</p>
                    <p class="has-margin-b60">By using agile and design thinking methods, we are able to swiftly deliver working solutions and allow you to see measurable value right away.</p>

                    <div class="slides">
                        <img src="{{ asset('img/team-1.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-2.jpg') }}" alt="Further team" />
                    </div>
                </div>
                <div class="column is-hidden-mobile is-offset-1-desktop">
                    <img src="{{ asset('img/process-en.svg') }}" alt="Our process" />
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
