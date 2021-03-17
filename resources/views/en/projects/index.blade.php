@extends('en.site')

@section('title', 'Our projects')
@section('description', 'Our projects are what define us. We are proud of our work and shared some of them as case studies for you to read. If you like what you see, let us know and we can show you more.')

@section('content')
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h2 class="hero-heading">
                        There's a story behind every <strong class="is-pearl">successful project&hellip;</strong>
                    </h2>
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
                    <a class="project-list__featured project-list__featured--steiger-erp is-reversed"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'steiger-erp']) }}"
                    >
                        <div class="project-list__featured__content">
                            <h1 class="project-list__featured__title">Steiger ERP</h1>
                            <div class="project-list__featured__description">
                                At its core, Steiger is a family business, being involved in the metalworking industry for several generations. We were contacted by them to develop a system that would automate their workflow and improve the reliability of their processes.
                            </div>
                            <span class="btn is-pearl">Explore the case study</span>
                        </div>

                        <img class="project-list__featured__image" src="{{ asset('media/projects/steiger-project-list.png') }}" alt="Steiger ERP - From Sales to Production" />
                    </a>
                </div>
            </div>
            <div class="columns is-mobile is-multiline">
                <div class="column is-flex is-12-mobile is-6-tablet is-4-desktop">
                    <a class="project-list__item"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'procter-and-gamble-cycle-inventory-counting']) }}"
                    >
                        <img class="project-list__item__image" src="{{ asset('media/projects/pg-project-list.jpg') }}" alt="Procter & Gamble - Cycle Inventory Counting" />

                        <h1 class="project-list__item__title">P&G Cycle Inventory Counting</h1>
                        <div class="project-list__item__description">
                            P&G contacted us to develop a fixed asset counting solution to help keep track of their fixed assets. With the help of the application, P&G reduced their inventory cycle from 3 years, to just 1 year!
                        </div>
                    </a>
                </div>
                <div class="column is-flex is-12-mobile is-6-tablet is-4-desktop">
                    <a class="project-list__item"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'centralized']) }}"
                    >
                        <img class="project-list__item__image" src="{{ asset('media/projects/centralized-project-list.jpg') }}" alt="Centralized.me - Artist Management From A to Z" />

                        <h1 class="project-list__item__title">Centralized.me Artist Management Platform</h1>
                        <div class="project-list__item__description">
                            Centralized.me is the world's first web application for artist management. It includes video content, guides, workflow checklists, email and agreement templates and budgets for all aspects of managing the career of a music artist.
                        </div>
                    </a>
                </div>
                <div class="column is-flex is-12-mobile is-6-tablet is-4-desktop">
                    <a class="project-list__item"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'harborsz-logistic']) }}"
                    >
                        <img class="project-list__item__image" src="{{ asset('media/projects/harborsz-project-list.jpg') }}" alt="Harborsz Logistic - Integrated Business Management" />

                        <h1 class="project-list__item__title">Harborsz Logistic</h1>
                        <div class="project-list__item__description">
                            Harborsz is a logistics company, whose main field of activity is the organisation of freight transfers by ferry, bridges or tunnels. Working closely with their team, we developed a system that helps them oversee all aspects of their operation.
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section has-padding-b30">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        They already <strong class="is-raspberry">chose us:</strong>
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <div class="columns is-mobile is-multiline">
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/png.png') }}" alt="Procter & Gamble" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/njoy.png') }}" alt="nJoy" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/msd.png') }}" alt="MSD Pharma" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/praktiker.png') }}" alt="Praktiker Hungary" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/harborsz.png') }}" alt="Harborsz Logistic" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/corvinus.png') }}" alt="Corvinus University of Budapest" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/onrobot.png') }}" alt="OnRobot" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/steiger.png') }}" alt="Steiger" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="testimonial__picture" src="{{ asset('img/testimonials-adorian-demeter.png') }}" alt="nJoy - The Hive Adorian Demeter testimonial" />
                    <blockquote class="testimonial__content">
                        <p>
                            I couldn't imagine how developing products would work without The Hive. Since its introduction, development of new products is 20% faster and all our data is organized and easy to manage.
                        </p>
                        <cite class="testimonial__author">Adorian DEMETER, nJoy</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact', [
        'buttonText' => 'Let\'s build something',
        'headingText' => 'We\'d love to help bring your product ideas to life'
    ])
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
                    "@id": "{{ localizedRoute('projects') }}",
                    "name": "Our Projects"
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
    "description": "Our projects are what define us. We are proud of our work and shared some of them as case studies for you to read. If you like what you see, let us know and we can show you more.",
    "headline": "Our Projects",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Custom software development, Software development, Web development, Digital product development, MVP development, Digital transformation",
    "mainEntityOfPage": "{{ localizedRoute('projects') }}",
    "name": "Our Projects",
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
                "@id": "{{ localizedRoute('projects') }}",
                "name": "Our Projects"
            }
        }
    ]
}
</script>
@endpush
