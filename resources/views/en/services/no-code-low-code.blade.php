@extends('en.site')

@section('title', 'No code and low code development services')
@section('description', 'We help non-technical founders build and launch MVPs using no-code & low-code — fast, affordable, and ready to test with real users.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        No code and low code development
                    </h5>
                    <h1 class="heading-1 has-margin-b5">
                        No CTO? <strong class="is-raspberry">No problem.</strong>
                    </h1>
                    <div>
                        We help non-technical founders build and launch MVPs using no-code & low-code: fast, affordable, and ready to test with real users.
                    </div>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <div class="services__service__benefits is-raspberry">
                        <div class="services__service__benefits__badge">Benefits</div>
                        <ul class="services__service__benefits__list has-margin-b30">
                            <li>Launch in 2-3 weeks, instead of months</li>
                            <li>Leverage our experience on over {{ config('site.stats.projects') }} projects</li>
                            <li>Focus on traction, not tech</li>
                            <li>Get early feedback, raise with confidence</li>
                            <li>Faster delivery with Bubble & Flutterflow</li>
                            <li>AI-powered builds using Polymet.ai and Lovable</li>
                        </ul>
                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large" href="#schedule">
                                Book a free discovery call
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b15 has-text-centered">
                        Who is this for?
                    </h2>
                    <h4 class="heading-5 has-margin-b60 has-text-centered">
                        Our no-code/low-code service is built for early-stage founders who want to turn ideas into investor-ready products.
                    </h4>
                </div>
            </div>
            <div class="columns is-reversed-tablet">
                <div class="column is-6-desktop is-offset-1-desktop is-8-tablet">
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">You have an idea but no technical co-founder</h3>
                            <p>You have deep industry knowledge, have a strong vision, but you're stuck at the "how do I build it?" stage. We become your product and tech team so you can move forward.</p>
                        </div>
                    </div>
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">You want to test your idea before committing to full development</h3>
                            <p>Before sinking months into coding, you want to launch something real, collect feedback, and validate the demand. We'll help you get there quickly, using tools that don't lock you in.</p>
                        </div>
                    </div>
                    <div class="is-flex">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">You're preparing to raise or apply to accelerators</h3>
                            <p>Investors love seeing traction. We build demo-ready prototypes that help you stand out, prove your idea works, and raise capital faster.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-5.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-4.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered">
                    <a class="btn has-margin-t15 is-large is-pearl" href="#schedule">
                        Launch with us in days
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-raspberry">Success stories</strong> from our pleased customers:
                    </h2>
                </div>
            </div>
            <div class="columns">
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
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b60 has-text-centered">What will you get?</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-pearl is-small"></div>
                    <h3 class="heading-4">Product thinking</h3>
                    <p>Working with us gives you access to a multi-disciplinary team that doesn't just ship code, but solves problems.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-small is-tangerine"></div>
                    <h3 class="heading-4">Clickable prototypes</h3>
                    <p>We deliver interactive prototypes for early demos, user testing, or investor decks.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-raspberry is-small"></div>
                    <h3 class="heading-4">Fully functional prototypes</h3>
                    <p>We will ship you a first working version in just a couple of days, instead of months. Start collecting user feedback and iterate.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-cobalt is-small"></div>
                    <h3 class="heading-4">Ownership and documentation</h3>
                    <p>You'll fully own your app and get handover docs to manage, iterate, or hand off to future devs.</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <a class="btn has-margin-t15 is-large is-pearl" href="#schedule">
                    Start your product journey
                </a>
            </div>
        </div>
    </section>

    <section class="section has-padding-b30">
        <div class="container">
            <div class="columns has-margin-b30">
                <div class="column">
                    <h2 class="hero-heading has-text-centered">
                        Real case studies. Real <strong class="is-raspberry">results.</strong>
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <a class="project-list__featured project-list__featured--centralized is-reversed"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'centralized']) }}"
                    >
                        <div class="project-list__featured__content">
                            <h1 class="project-list__featured__title">Centralized.me Artist Management Platform</h1>
                            <div class="project-list__featured__description">
                                Centralized.me is the world's first web application for artist management. It includes video content, guides, workflow checklists, email and agreement templates and budgets for all aspects of managing the career of a music artist.
                            </div>
                            <span class="btn is-white">Read the case study</span>
                        </div>

                        <img class="project-list__featured__image" src="{{ asset('media/projects/centralized-project-list.png?v4') }}" alt="Centralized.me Artist Management Platform" width="588" />
                    </a>
                    <a class="project-list__featured project-list__featured--onepagelink-electronic-press-kit-builder"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'onepagelink-electronic-press-kit-builder']) }}"
                    >
                        <div class="project-list__featured__content">
                            <h1 class="project-list__featured__title">OnePageLink - Electronic Press Kit Builder</h1>
                            <div class="project-list__featured__description">
                                OnePageLink is the ultimate electronic press kit builder. With its help, artists can pitch their act for opportunities or send their approved promotional assets to events & festivals. All done with one simple link.
                            </div>
                            <span class="btn is-black">Read the case study</span>
                        </div>

                        <img class="project-list__featured__image" src="{{ asset('media/projects/opl-project-list.png?v4') }}" alt="OnePageLink - Electronic Press Kit Builder" width="588" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h3 class="heading-2">F.A.Q.</h3>

                    <h4 class="heading-3">How long does it take to build a prototype?</h4>
                    <p class="has-margin-b30"><small>Depending on complexity, projects can take between 10 and 30 days. We move fast, prioritize core features, and leave room for iteration. If you need a simple prototype first, we can deliver that within days.</small></p>

                    <h4 class="heading-3">Can I raise investment with a no-code MVP?</h4>
                    <p class="has-margin-b30"><small>Yes. Many of our clients used their MVP to get into accelerators or raise pre-seed rounds. Having a real, working product with proven traction gives you a big edge over slide decks alone.</small></p>

                    <h4 class="heading-3">Will I own the product you build?</h4>
                    <p class="has-margin-b30"><small>Yes, 100%. You'll own the platform account (e.g., Bubble, Flutterflow), all workflows, databases, and visual assets. We also provide documentation so you can manage it yourself or hand it off later.</small></p>

                    <h4 class="heading-3">Can I update or manage the app myself later?</h4>
                    <p class="has-margin-b30"><small>Yes. That's one of the benefits of these platforms. We'll show you how to handle basic updates, content, and workflows. Or you can keep us involved as your product evolves.</small></p>

                    <h4 class="heading-3">What happens after launch?</h4>
                    <p class="has-margin-b30"><small>We don't disappear. We can stay on as your product team for updates, new features, or even support with early traction and iteration.</small></p>

                    <h4 class="heading-3">Do you use AI in the development process?</h4>
                    <p class="has-margin-b30"><small>There's no way around it anymore. Tools like Polymet.ai or Lovable help streamline UX, content, onboarding flows, or logic generation. They speed up the build and enrich the user experience.</small></p>

                    <h4 class="heading-3">What's the difference between no-code and low-code?</h4>
                    <p class="has-margin-b30"><small>No-code products are built with the help of visual interfaces and pre-built components. Low-code allows more customization (e.g., with Flutterflow). We use whichever is best for your use case.</small></p>

                    <h4 class="heading-3">Can we switch to custom code later?</h4>
                    <p><small>Absolutely. We document everything for a clean handoff when it's time to scale.</small></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="schedule">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b15 has-text-centered">
                         <strong class="is-raspberry">Schedule</strong> a discovery call!
                    </h2>
                    <h4 class="heading-5 has-text-centered">
                        You bring the idea — we'll bring the product team.
                    </h4>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <!-- Calendly inline widget begin -->
                    <div class="calendly-inline-widget" data-url="https://calendly.com/peterilles/further-discovery-call?hide_gdpr_banner=1" style="min-width:320px;height:700px;"></div>
                    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                    <!-- Calendly inline widget end -->
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
                    "@id": "{{ config('app.url') }}",
                    "name": "Homepage"
                }
            },
            {
                "@type": "ListItem",
                "position": "2",
                "item": {
                    "@id": "{{ localizedRoute('services') }}",
                    "name": "Services"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ config('app.url') }}/en/services/no-code-and-low-code-development",
                    "name": "No code and low code development services"
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
    "description": "We help non-technical founders build and launch MVPs using no-code & low-code — fast, affordable, and ready to test with real users.",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Digital product development, MVP development, Custom software development, Software development, Web development, UX research, UX design, UI design, No-code, Low-code, Bubble.io, Flutterflow, Polymet.at, Lovable",
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
        },
        {
            "@type": "ListItem",
            "position": "2",
            "item": {
                "@id": "{{ localizedRoute('services') }}",
                "name": "Services"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ config('app.url') }}/en/services/no-code-and-low-code-development",
                "name": "No code and low code development services"
            }
        }
    ]
}
</script>
@endpush