@section('title', 'Harborsz Logistic case study')
@section('description', 'Working together closely with the Harborsz team, we developed a system that helps oversee all operational aspects of this logistics company.')
@section('preview_image', asset('media/projects/harborsz-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">Harborsz Logistic</h2>
        <h3 class="project__intro">
            Working together closely with the Harborsz team, we developed a system that helps oversee all operational aspects of this logistics company.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Background</h4>
                    <p>Harborsz's main field of activity is the organisation of freight transfers by ferry, bridges or tunnels. Prior to developing the current system, the daily activities required switching between multiple applications and emails.</p>
                    <p>As a result of this new integrated business management software, Harborsz were able to fully automate their processes, reduce human error and oversee all aspects of their operation.</p>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img src="{{ asset('media/projects/harborsz-illustration.gif') }}" alt="Harborsz Logistic" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        Originally developed for the Romanian branch of Harborsz, the software has since been adopted by every international branch as well, processing over 127k bookings in the meantime.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__overview">
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <h4 class="heading-1">Key problems and solutions</h4>
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Booking tolls and ferry tickets was a manual process</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>Every time a shipment required crossing a toll road or transport by ferry, bookings had to be made manually, either by accessing a 3rd party system or by email.</p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>After several preliminary meetings with the providers, we successfully <strong>integrated all the 3rd party systems</strong> through APIs, allowing for the automatic booking of toll and tickets by simply selecting the route.</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/harborsz-overview-1.png') }}" alt="Harborsz - Booking tolls and ferry tickets was a manual process" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Customers had to directly contact Harborsz for booking</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>Previously, if customers wished to make a booking, they had to access the Harborsz website and make a booking request there. This didn't allow them to automate their own processes.</p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>Collecting feedback from the customers, the demand for an <strong>automatable booking process</strong> quickly became apparent. By further interviewing them, we gathered a lot of valuable input on what their use cases are, and developed an API to our system that would handle all their business needs.</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/harborsz-overview-2.png') }}" alt="Harborsz - Customers had to directly contact Harborsz for booking" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="project__testimonial">
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <img class="project__testimonial__picture" src="{{ asset('img/testimonials-edina-bakk.png') }}" alt="Harborsz Edina Bakk testimonial" />
                        <cite class="project__testimonial__author">Edina BAKK</cite>
                        <blockquote class="project__testimonial__content">
                            <p>"For us the greatest advantage of the Harborsz Logistic software is that it's a complete, integrated solution. We no longer have to carry-out our daily operations by switching between different systems and email.</p>
                            <p>This greatly reduced the frequency of errors and increased productivity."</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h4 class="heading-1">
                        The key takeaway
                    </h4>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">↪</div>
                </div>
                <div class="column is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        3rd party integrations can be hard
                    </h5>
                    <p>Each of the 3rd party suppliers had different gateway mechanisms to access their data. Some had well documented APIs, some had only FTP access to a repository. Some were SOAP-based APIs, some were REST.</p>
                    <p>One of our biggest challenges was developing an interface that would be flexible enough to communicate with all the different gateways and also be extensible, so that new APIs and connections could be added in later.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <a class="project__gallery" data-toggle="modal" data-target="#gallery-modal">
            <img src="{{ asset('media/projects/harborsz-gallery.jpg') }}" alt="Open gallery" />

            <span class="btn is-large">Expand gallery</span>
        </a>
    </section>

    <section class="section">
        <div class="project__contact">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-1">What can we do for you?</div>
                        <a class="btn is-large" href="{{ localizedRoute('contact') }}">
                            Book a consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.projects.banners.' . $bannerSlug)
@endsection

@push('content-modals')
    <div class="modal" id="gallery-modal" tabindex="-1" role="dialog">
        <div class="container">
            <div class="project__gallery-modal">
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/harborsz-gallery-1.jpg') }}" alt="Harborsz Logistic" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Bookings</h5>
                            <div class="project__gallery-modal__description">
                                <p>The bookings screen is where most of the activity happens. All the booking requests from the website or from the API are clearly shown to the operators.</p>
                                <p>Most of the bookings are automatically processed: fares and tolls are automatically reserved and invoiced.</p>
                                <p>Where this is not possible, the software clearly signals the operator, that human intervention is necessary.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/harborsz-gallery-2.jpg') }}" alt="Harborsz Logistic" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Dynamic pricing</h5>
                            <div class="project__gallery-modal__description">
                                <p>Dynamic pricing is what makes the automation possible. Dozens of variables are considered when pricing a route: vehicle size and weight, cargo surcharges, number of drivers, route length, peak seasons, port dues and 3rd party service costs.</p>
                                <p>Detailed reports are generated at regular intervals, allowing the Harborsz staff to tinker with the pricing models to cover costs and increase profit margins.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns has-text-centered">
                    <a class="btn is-large is-pearl" data-dismiss="modal">Close gallery</a>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->
    <div class="modal__backdrop"></div>
@endpush



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
                    "name": "Our projects"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                    "name": "Harborsz Logistic case study"
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
    "description": "The online registry replaces the current paper-based systems and provides real-time communication and swift data synchronization between the OVSZ (National Blood Transfusion Service) and donation centers across Hungary.",
    "headline": "Harborsz Logistic case study",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "ERP, Logistics",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "Harborsz Logistic case study",
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
                "name": "Our projects"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                "name": "Harborsz Logistic case study"
            }
        }
    ]
}
</script>
@endpush