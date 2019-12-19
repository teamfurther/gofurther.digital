@extends('en.site')

@section('title', 'MVP Development')
@section('description', 'Ship your products faster with Further.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">MVP Development</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">Ship your products faster with Further.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Discovery</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>Discovery is the most important phase of building a software product. This is when we assess your business needs and requirements and plan the next steps in the process.</p>
                        <ul class="list has-bullets">
                            <li>understanding requirements</li>
                            <li>prioritizing features</li>
                            <li>creating user journeys</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/mvp-illustration-discovery.png') }}" alt="MVP discovery" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <h3 class="heading-3">Prototyping and testing</h3>
                    <p>A prototype is a visual representation of how the digital product will look, feel, and interact in it's final version. Going through loops of feedback and revisions with prospective users, we optimize the prototype. As nothing has been coded yet, it's relatively cheap and easy to make changes at this stage.</p>
                    <ul class="list has-bullets">
                        <li>give users control</li>
                        <li>validate business ideas</li>
                        <li>gather feedback</li>
                        <li>improve product</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/mvp-illustration-prototyping.png') }}" alt="MVP prototyping" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <h3 class="heading-3">Design and develop</h3>
                        <p>This one's pretty self-explanatory. Once the concepts are validated, our designers will bring your prototypes to life, while the development team will choose the right architecture for your software product. Let the coding commence!</p>
                        <ul class="list has-bullets">
                            <li>mobile development</li>
                            <li>web development</li>
                            <li>UX and UI design</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/mvp-illustration-design-develop.png') }}" alt="MVP design and development" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <h3 class="heading-3">Analyse and evolve product</h3>
                    <p>Onboard your customers and observe how they interact with your app. We'll help you analyse the feedback and metrics and make adjustments to improve your product. We make sure our apps are easy to change, so in case the numbers show the need, we can quickly make radical changes to help you pivot.</p>
                    <ul class="list has-bullets">
                        <li>measure</li>
                        <li>improve</li>
                        <li>pivot</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/mvp-illustration-analyse-evolve.png') }}" alt="MVP evolution" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution__cta">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-2">Do you want to talk about your software product idea?</div>
                        <a class="btn is-large is-pearl" href="{{ url('#contact') }}">Let's talk!</a>
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
                    "@id": "{{ localizedRoute('solutions') }}",
                    "name": "Our Solutions"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('solutions.mvp') }}",
                    "name": "MVP Development"
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
    "description": "Ship your products faster with Further.",
    "headline": "MVP Development",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "MVP, MVP development, user journeys, business idea validation, UX, design thinking",
    "mainEntityOfPage": "{{ localizedRoute('solutions.mvp') }}",
    "name": "MVP Development",
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
                "@id": "{{ localizedRoute('solutions') }}",
                "name": "Our Solutions"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('solutions.mvp') }}",
                "name": "MVP Development"
            }
        }
    ]
}
</script>
@endpush
