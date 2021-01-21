@section('title', 'OVSZ case study')
@section('description', 'The online registry replaces the current paper-based systems and provides real-time communication and data synchronization between the OVSZ (National Blood Transfusion Service) and donation centers across Hungary.')
@section('preview_image', asset('media/projects/ovsz-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">OVSZ - Online Cross-Donation Registry</h2>
        <h3 class="project__intro">
            The online registry provides real-time <span class="is-hidden-tablet">communication and </span>data sync between the OVSZ and donation centers across Hungary.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Background</h4>
                    <p>
                        Before developing this application for OVSZ (Hungarian National Blood Transfusion Service), donation centers had to submit lab results to the central database on paper.
                    </p>
                    <p>
                        OVSZ stored all these results, but never provided a standard protocol for it to be accessed.
                    </p>
                    <p>
                        Because two-way data synchronization didn't exist, donation centers had no knowledge if a donor has already been marked as ineligible to give blood by another donation center.
                    </p>
                    <p>
                        <small>The project was developed in collaboration with <a href="https://www.happymed.hu" target="_blank">Happymed</a> and <a href="http://popcode.hu" target="_blank">Popcode</a>.</small>
                    </p>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img src="{{ asset('media/projects/ovsz-illustration.png') }}" alt="OVSZ - Online Cross-Donation Registry" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        The online cross-donation registry is currently being tested by a selected number of donation centers across the country. We are pleased to hear the feedback has been overwhelmingly positive, and that donation centers are finding it useful and actually requesting additional features.
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
                        <h5 class="heading-3">There was no standard way to access donor information</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>
                            Donation centers had no way to check if a donor has been previously marked as ineligible to give blood at another donation center.
                        </p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>
                            Working together with the database architects at OVSZ, we defined a contract which describes the way information from the donation centers is transmitted and processed.
                        </p>
                        <p>
                            After this, we implemented a data transport method which automatically submits donor information to the central database, whenever a donation center uploads lab result to the application.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/ovsz-overview-1.png') }}" alt="OVSZ - There was no standard way to access donor information" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Uploading donor information was tedious and unreliable</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>
                            Donation centers previously had to submit lab results by paper, which was then manually uploaded to the central database.
                        </p>
                        <p>
                            This process was tiresome for both the donation centers and OVSZ, and also error-prone because of the human factor.
                        </p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>
                            Defining the standard protocol of how a submission should look like, allowed us to automatically update donor information whenever a donation center finished the lab results.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/ovsz-overview-2.png') }}" alt="OVSZ - Uploading donor information was tedious and unreliable" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h4 class="heading-1">
                        Key takeaways
                    </h4>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">1</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Working with sensitive information is tricky
                    </h5>
                    <p>
                        The first thing we had to learn during this project, is how to handle sensitive healthcare data.
                    </p>
                    <p>
                        Though Hungarian laws regarding this issue are not as exact, studying the US HIPAA standards and their different implementations helped us build a robust and secure solution which protects donor information.
                    </p>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Accessing and modifying secure data isn't easy
                    </h5>
                    <p>
                        On most projects we work on, we're used to having complete control of the database, or at the very least have a standard way of accessing it through an API.
                    </p>
                    <p>
                        In this case we had neither, so we had to work together with the database team at OVSZ to design a system which would allow us to access and update sensitive data through multiple firewalls and intermediary security gates.
                    </p>
                </div>
            </div>
        </div>
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
                    "name": "OVSZ case study"
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
    "headline": "OVSZ case study",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "App, Mobile application, Laravel",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "OVSZ case study",
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
                "name": "OVSZ case study"
            }
        }
    ]
}
</script>
@endpush