@section('title', 'Centralized case study')
@section('description', 'Centralized is the world\'s first web application for artist management, for self-managed artists and new-era managers.')
@section('preview_image', asset('media/projects/centralized-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">Centralized.me</h2>
        <h3 class="project__intro">
            Centralized is the world's first web application for artist management, for self-managed artists and new-era managers.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Background</h4>
                    <p>
                        Centralized.me is the world's first automated digital manager for emerging musicians and managers, providing them with guidance, control over their careers and connection to the music industry&hellip; so they can spend more time creating!
                    </p>
                    <p>
                        Centralized.me provides video content, guides, workflow checklists, email and agreement templates and budgets to help artists navigate their way through the music industry.
                    </p>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/centralized-logo.svg') }}" alt="Centralized" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        After working together on a successful MVP in 2018, Brian, the creator of Centralized, contacted us with the great news: they secured investment and work can begin on the full-feature version.
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
                        <h4 class="heading-1">Key problems that we needed to address</h4>
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">The platform had to be scalable</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>
                            Being a start-up project we were hoping lots of people to start using the platform at some point in time. And based on the marketing plan, we were expecting them to start using it in huge waves.
                        </p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>
                            Before writing even a single line of code, we had to take extra care in choosing the right software architecture. After careful planning we chose a system and a cloud-provider which will allow us to quickly scale up to hundreds of thousands of users.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/centralized-overview-1.png') }}" alt="Centralized - The platform had to be scalable" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">We needed to gather insights</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>
                            A lot of effort went into improving the second release, based on the customer feedback we got regarding the MVP. We realised we need to put in place the necessary tools to gather even more relevant analytics.
                        </p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>
                            Apart from the usual suspects like Google Analytics and Hotjar, we also worked closely together with the marketing team to set up a whole suite of tracking codes, A/B tests and feedback tools which help us continuously improve the product with relevant features.
                        </p>
                    </div>
                    <div class="column">
                        <img class="is-pulled-right" src="{{ asset('media/projects/centralized-overview-2.png') }}" alt="Centralized - We needed to gather insights" />
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
                        <img class="project__testimonial__picture" src="{{ asset('img/testimonials-brian-dubb.png') }}" alt="Centralized Brian Dubb testimonial" />
                        <cite class="project__testimonial__author">Brian DUBB</cite>
                        <span class="project__testimonial__title">Founder at Centralized</span>
                        <blockquote class="project__testimonial__content">
                            <p>
                                "Further developed our MVP quickly and within budget, which led to the on-boarding of our beta testing users and another round of investment. We're very pleased to have stayed with Further for the second release."
                            </p>
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
                        Start-up projects and corporate project are very different
                    </h5>
                    <p>
                        Although we have worked on start-up projects before and after centralized.me, few have been as fast paced. Compared to our usual corporate projects, where many decisions are slow and often fall victim to bureaucracy, this project required a completely different mindset.
                    </p>
                    <p>
                        We had to adjust some of our project management workflows to allow for the flexibility and quick decision making demanded by a start-up project.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <a class="project__gallery" data-toggle="modal" data-target="#gallery-modal">
            <img src="{{ asset('media/projects/centralized-gallery.jpg') }}" alt="Open gallery" />

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
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/centralized-gallery-1.jpg') }}" alt="Centralized" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Wizard</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    The user story starts with a wizard, which helps them determine where they are in their journey.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/centralized-gallery-2.jpg') }}" alt="Centralized" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">My plan</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    Based on the answers the users give in the wizard, we generate them a customized plan to follow.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/centralized-gallery-3.jpg') }}" alt="Centralized" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Guides</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    Each step in a user's plan links to a guide page. These guide pages contain video content, checklists, email and contract templates, and budgets.
                                </p>
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
                    "name": "Centralized case study"
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
    "description": "Centralized.me is the world's first automated digital manager for emerging musicians and managers, providing them with guidance, control over their careers and connection to the music industry.",
    "headline": "Centralized case study",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "MVP, Start-up, Laravel, Vue",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "Centralized case study",
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
                "name": "Centralized case study"
            }
        }
    ]
}
</script>
@endpush