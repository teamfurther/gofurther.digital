@extends('en.site', ['bodyClass' => 'has-hero'])

@section('title', 'Digital Transformation Agency in Hungary and Romania')
@section('description', 'Further helps you embrace the digital world through our user-centered, process-driven digital transformation strategy.')

@section('content')
    <section class="hero is-tangerine">
        <h2 class="hero-heading">
            Transform your business.<br />
            Reshape your industry.<br />
            <strong class="is-cobalt">Go Further.</strong>
        </h2>
        <a class="hero__cta" href="{{ localizedRoute('contact') }}">
            How does the future of your industry look like?<strong>Let's find out</strong>
        </a>
        <a class="hero__scroll" href="{{ url('#intro') }}"></a>
    </section>

    <section class="section is-dark" id="intro">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12-tablet is-5-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-tangerine">Accelerate</strong> your company into a new digital world.
                    </h2>
                </div>
                <div class="column is-offset-1-widescreen">
                    <p>
                        Most businesses get sucked into the daily grind sooner or later. When your primary focus is on day-to-day operations and profits, it's tough to find time to plan ahead.
                    </p>
                    <p>
                        It's never been more important to adapt to the ever-changing demands of a digital world. Together with our partners, we combine the best of business, creative and technology, allowing us to deliver next generation products and services for our clients.
                    </p>
                    <p>
                        Our process begins by exploring your company's strategy, processes and vision for the future. Once we know what we're aiming for, we'll help you bridge the gap by adopting the right culture and processes.
                    </p>
                    <p>
                        Transformation starts with the people. It requires the right mindset. Technology only functions as the enabler.
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
                        Our <strong class="is-cobalt">digital transformation</strong> services:
                    </h2>
                </div>
                <div class="column is-offset-1-widescreen">
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-transformation-innovation-consulting-icon.png') }}" alt="Digital transformation - Innovation consulting" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Innovation<br />consulting</h3>
                            <p>
                                The fastest growing companies leverage emerging technology to transform their business and industries. We can navigate you through the sea of buzzwords and exploit the right technology for the most gains.
                            </p>
                            <ul class="list has-bullets">
                                <li>Cloud transformation</li>
                                <li>AI and machine learning</li>
                                <li>Big data</li>
                                <li>Business intelligence</li>
                                <li>Data strategy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-transformation-operational-efficiency-icon.png') }}" alt="Digital transformation - Operational efficiency" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Operational<br />efficiency</h3>
                            <p>
                                One of the most important functions of a digital transformation project is to deliver your products or services to your customers in the most cost-effective manner possible.
                            </p>
                            <p>
                                Our consultants will guide you through an inside-out approach to streamline business process and achieve greater operational efficiency.
                            </p>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-transformation-business-agility-icon.png') }}" alt="Digital transformation - Business agility" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Business<br />agility</h3>
                            <p>
                                It's one thing to have a great strategy, it's a whole other thing to implement the necessary changes. This is where agile comes in. Agile embraces change.
                            </p>
                            <p>
                                Our partnering agile consultants will gradually introduce agile tools and techniques, allowing your company to innovate faster.
                            </p>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-transformation-ux-service-design-icon.png') }}" alt="Digital transformation - UX and service design" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">UX and<br />service design</h3>
                            <p>
                                Service design is a holistic and outside-in approach to find solutions to the complex problems your business faces. It's final goal is to bring a better experience to your customers and even your own team.
                            </p>
                            <ul class="list has-bullets">
                                <li>UX research</li>
                                <li>Design thinking workshop facilitation</li>
                                <li>Customer experience (CX) design</li>
                                <li>Employee experience (EX) design</li>
                            </ul>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-transformation-change-management-icon.png') }}" alt="Digital transformation - Change management" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Change<br />management</h3>
                            <p>
                                For digital transformation projects to be successful, an organizational change and even a cultural shift is necessary to continuously challenge the status-quo, be disruptive with experimenting and get comfortable with failure.
                            </p>
                            <p>
                                We can prepare and support your team along this journey, so they can quickly adopt the innovative mindset.
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
                        Clients who already <strong class="is-tangerine">reshaped</strong> their businesses:
                    </h2>
                </div>
            </div>
            <div class="columns has-margin-b60">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="project__testimonial__picture" src="{{ asset('img/testimonials-adorian-demeter.png') }}" alt="nJoy - The Hive Adorian Demeter testimonial" />
                    <blockquote class="project__testimonial__content">
                        <p>
                            I couldn't imagine how developing products would work without The Hive. Since its introduction, development of new products is 20% faster and all our data is organized and easy to manage.
                        </p>
                        <cite class="project__testimonial__author">Adorian DEMETER, nJoy</cite>
                    </blockquote>
                </div>
            </div>
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="project__testimonial__picture is-right-aligned" src="{{ asset('img/testimonials-edina-bakk.png') }}" alt="Harborsz Edina Bakk testimonial" />
                    <blockquote class="project__testimonial__content">
                        <p>
                            For us the greatest advantage of the Harborsz Logistics software is that it's a complete, integrated solution. We no longer have to carry-out our daily operations by switching between different systems and email.
                        </p>
                        <p>
                            This greatly reduced the frequency of errors and increased productivity.
                        </p>
                        <cite class="project__testimonial__author">Edina BAKK, Harborsz Logistic</cite>
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
                    "@id": "{{ localizedRoute('services.digital-transformation') }}",
                    "name": "Digital Transformation"
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
    "description": "Further helps you embrace the digital world through our user-centered, process-driven digital transformation strategy.",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Digital Transformation, Cloud Transformation, Business Agility, Business Strategy, Operational Efficiency, Data Strategy",
    "mainEntityOfPage": "{{ localizedRoute('services.digital-transformation') }}",
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
                "@id": "{{ localizedRoute('services.digital-transformation') }}",
                "name": "Digital Transformation"
            }
        }
    ]
}
</script>
@endpush
