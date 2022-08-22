@section('title', 'OnePageLink case study')
@section('description', 'OnePageLink is the ultimate electronic press kit builder for artists.')
@section('preview_image', asset('media/projects/opl-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">OnePageLink</h2>
        <h3 class="project__intro">
            The ultimate electronic press kit builder for artists to manage their promotional assets.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Background</h4>
                    <p>OnePageLink is a simple and effective EPK builder. An EPK is an Electronic Press (or Promo) Kit. Artists can use their OnePageLink to pitch their act for opportunities or send approved promotional assets to events & festivals. All done with one simple link, professionally presented.</p>
                    <p>The whole purpose of OnePageLink is to make creating a promo page or EPK simple and easy for anyone. No design skills are needed! Once artists sign up for the free trial, they'll be able to quickly and effectively set up a promo page in minutes.</p>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/opl-logo.svg') }}" alt="OnePageLink" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        OnePageLink was a functioning product in 2017 when they first contacted us. Initially, we took over the maintenance and support tasks and were commissioned to develop v2 in 2018.
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
                        <h4 class="heading-1">Key challenges and solutions</h4>
                    </div>
                </div>
                <div class="columns has-margin-b90 is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Offering continued service while migrating to a new platform</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>Since OnePageLink already had active users, we had to make sure there were no disruptions in the service as we moved to a new technological platform. We rewrote the entire code for the product from scratch.</p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>We had to employ both technical and customer support solutions to overcome this challenge. Most of the content could be migrated automatically, but not all, due to technological limitations. In such situations, we closely collaborated with the OnePageLink team to communicate this to their customers and prepare them for the switch.</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/opl-overview-1.png') }}" alt="OnePageLink - Offering continued service while migrating to a new platform" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Changing payment providers</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>As part of moving to a new platform, we also decided to replace the existing credit card payment provider with a more modern and cheaper solution. This raised another migration issue. How do we keep the different customer subscriptions rolling on without interruption or the need to create a new subscription?</p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>Again, we had to tackle this issue from two sides. We wrote automated scripts to calculate the remaining days on subscriptions and move these subscriptions to the new provider. Still, we couldn't migrate credit card details, as the 3rd party providers store those.</p>
                        <p>We didn't wish to force customers to re-enter their credit card details, so we liaised with both providers to migrate the data, which was done successfully after a long chain of emails.</p>
                    </div>
                    <div class="column">
                        <img class="is-pulled-right" src="{{ asset('media/projects/opl-overview-2.png') }}" alt="OnePageLink - Changing payment providers" />
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
                        <img class="project__testimonial__picture" src="{{ asset('img/testimonials-carlo-santone.png') }}" alt="OnePageLink Carlo Santone testimonial" />
                        <cite class="project__testimonial__author">Carlo SANTONE</cite>
                        <span class="project__testimonial__title">Founder at OnePageLink</span>
                        <blockquote class="project__testimonial__content">
                            <p>"They are open and friendly to work with, they will give you the time you need to explain your needs and requirements and will come up with smart and logical solutions. We are very happy with what we've built together with Further, and what we continue to come up with creatively & technically as we iterate and refine."</p>
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
                        Key takeaways
                    </h4>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">↪</div>
                </div>
                <div class="column is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Working with creative partners is fun, but challenging
                    </h5>
                    <p>The team of OnePageLink is made up of highly creative people. Artists, musicians, designers. This was extremely exciting as they constantly came up with bright new ideas and beautiful design solutions.</p>
                    <p>At the same time, it was also challenging, as we had to constantly revisit features that were considered done, alter them and make sure they didn't break anything else in the app (thank heavens for automated tests). All this while trying to get the product to market as quickly as possible!</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">↪</div>
                </div>
                <div class="column is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Data migrations are projects in their own right
                    </h5>
                    <p>This project was very tricky from a data migration perspective. We were fortunate to have worked on similar projects before and knew it had to be given the necessary attention.</p>
                    <p>We have already gathered all the data on the platform and 3rd party systems from the get-go. Then we marked the ones that could be migrated automatically and those that couldn't and devised a step-by-step plan for migration, including communication with all stakeholders involved.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <a class="project__gallery" data-toggle="modal" data-target="#gallery-modal">
            <img src="{{ asset('media/projects/opl-gallery.jpg') }}" alt="Open gallery" />

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
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/opl-gallery-1.jpg') }}" alt="OnePageLink" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">EPK / Promo page</h5>
                            <div class="project__gallery-modal__description">
                                <p>This is the end result. The shareable electronic press kit or promo page which artists can use as a pitch deck or send to events, festivals or PR.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/opl-gallery-2.jpg') }}" alt="OnePageLink" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Page builder</h5>
                            <div class="project__gallery-modal__description">
                                <p>This is where artists can build their pages. No design skills are needed to create the page. It is all build using templates, while still allowing enough customization for customers to let their creativity loose.</p>
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
                    "name": "OnePageLink case study"
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
    "description": "OnePageLink is the ultimate electronic press kit builder for artists.",
    "headline": "OnePageLink case study",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Startup, Laravel, Vue",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "OnePageLink case study",
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
                "name": "OnePageLink case study"
            }
        }
    ]
}
</script>
@endpush