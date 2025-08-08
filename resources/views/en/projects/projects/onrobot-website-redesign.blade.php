@section('title', 'OnRobot case study')
@section('description', 'As their marketing and sales ambitions grew, OnRobot needed a new website that could keep pace and enable their team to build modular landing pages, launch campaigns, and run A/B tests independently, without relying on external developers.')
@section('preview_image', asset('media/projects/onrobot-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">OnRobot.com</h2>
        <h3 class="project__intro">
            Blazing fast website for a global company based in the robotics cluster of Denmark.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Background</h4>
                    <p>OnRobot provides small and mid-sized manufacturers with collaborative robot applications for material handling, machine tending, surface finishing, quality and assembly.</p>
                    <p>As their marketing and sales ambitions grew, they needed a new website that could keep pace and enable their team to build modular landing pages, launch campaigns, and run A/B tests independently, without relying on external developers.</p>
                    <div class="project__stats">
                        <div class="project__stat">
                            <span>70<small>%</small></span> lead increase<br />within the first week
                        </div>
                        <div class="project__stat is-downward">
                            <span>2<small>x</small></span> faster<br />content creation
                        </div>
                    </div>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/onrobot-logo.svg') }}" alt="OnRobot" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        We originally built OnRobot's website back in 2018, and it served their needs reliably for six years. Now, it was time for a modern upgrade — one that could carry them confidently for another six years. We were thrilled to be trusted once again to lead the redesign and continue our collaboration.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">
                        The process
                    </h4>
                </div>
            </div>
            <div class="columns">
                <div class="column is-7-tablet">
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-2-tablet is-1-widescreen">
                            <div class="list-hero">1</div>
                        </div>
                        <div class="column is-10-mobile is-10-tablet is-9-widescreen is-offset-1-widescreen">
                            <h5 class="heading-4">
                                Exploring business goals and aligning team
                            </h5>
                            <p>We worked closely with OnRobot's sales and marketing teams to gain a comprehensive understanding of their current business goals and challenges. Together, we defined key pain points and set clear KPIs for the new website.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-2-tablet is-1-widescreen">
                            <div class="list-hero">2</div>
                        </div>
                        <div class="column is-10-mobile is-10-tablet is-9-widescreen is-offset-1-widescreen">
                            <h5 class="heading-4">
                                Analysing current website
                            </h5>
                            <p>Using tools like Microsoft Clarity and Google Analytics, we explored user behavior to uncover what worked, and what didn't. We mapped out the information hierarchy and identified the most effective ways to communicate with visitors.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-2-tablet is-1-widescreen">
                            <div class="list-hero">3</div>
                        </div>
                        <div class="column is-10-mobile is-10-tablet is-9-widescreen is-offset-1-widescreen">
                            <h5 class="heading-4">
                                Creating a design system
                            </h5>
                            <p>Based on our analysis, we designed a library of reusable styles and components that empower OnRobot's marketing and editing teams to create new content with ease — fully aligned with their brand, and without needing help from a designer or developer.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-2-tablet is-1-widescreen">
                            <div class="list-hero">4</div>
                        </div>
                        <div class="column is-10-mobile is-9-tablet is-9-widescreen is-offset-1-widescreen">
                            <h5 class="heading-4">
                                Providing a flexible technical solution
                            </h5>
                            <p>Once the design system was complete, we built all the components using Statamic's block-based editor. We chose Statamic as our CMS for its exceptional editor experience, flat-file content storage, and super-fast static caching.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-hidden-mobile">
                    <img class="is-rounded" src="{{ asset('media/projects/onrobot-process.png') }}" alt="OnRobot - The Process" />
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="project__overview">
            <div class="container">
                <div class="columns has-margin-b30">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <h4 class="heading-1">Key Challenges</h4>
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Empowering non-tech teams to create content</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>On the old site, each content type was locked to a fixed template. Adding new sections required both a designer and a developer, slowing down content production.</p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>With Statamic's Bard editor, we introduced a flexible set of custom content blocks based on the new design system. Now, marketing and editorial teams can build complex layouts without writing a single line of code.</p>
                    </div>
                    <div class="column has-margin-b60">
                        <img class="is-rounded" src="{{ asset('media/projects/onrobot-overview-1.gif') }}" alt="OnRobot.com - Empowering non-tech teams to create content" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">A global team needed a global solution</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>OnRobot manages content in 23 languages, each with its own editing team. Coordinating updates, translations and maintaining consistency across versions was a major challenge.</p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>Statamic's multi-site architecture enabled a scalable setup with localized content, custom access controls, and a structured review and publishing workflow for each language.</p>
                    </div>
                    <div class="column has-margin-b60">
                        <img class="is-rounded" src="{{ asset('media/projects/onrobot-overview-2.png') }}" alt="OnRobot.com - A global team needed a global solution" />
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Seamless testing across environments</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>Keeping content consistent across development, staging, and production environments was difficult. New features were often tested with outdated content, leading to inaccurate results, missed issues and slow rollouts.</p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>Statamic's flat-file content storage and Git automation keep content versions aligned across all environments. This ensures that new features are always tested with real, up-to-date content, improving quality and accelerating delivery.</p>
                    </div>
                    <div class="column">
                        <img class="is-rounded" src="{{ asset('media/projects/onrobot-overview-3.png') }}" alt="OnRobot.com - Seamless testing across environments" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__testimonial">
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <img class="project__testimonial__picture" src="{{ asset('img/testimonials-christian-hummelgaard.png') }}" alt="OnRobot.com Christian Kuntz Hummelgaard testimonial" />
                        <div class="project__testimonial__video">
                            <cite class="project__testimonial__author">Christian Kuntz HUMMELGAARD</cite>
                        </div>
                        <span class="project__testimonial__title">Global Digital Marketing Manager at OnRobot</span>
                        <blockquote class="project__testimonial__content">
                            <p>"We've had a 70 to 100% increase in leads since launching the site a week ago. (...) And it's mid-July! We shouldn't be seeing this kind of spike. It's an incredible end to a web development journey."</p>
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
                    <div class="list-hero">1</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Lessons learned in content migration
                    </h5>
                    <p>We underestimated the complexity of migrating thousands of articles and case studies from the old SQL-based CMS to Statamic’s flat-file structure. Initially, we leaned on LLM tools to speed up the process, but they introduced more issues than they solved, requiring extensive manual correction. It wasn’t until we were nearly done that we figured out how to use it effectively 🙈.</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Stakeholder involvement drivers smoother outcomes
                    </h5>
                    <p>This project reinforced what we’ve always believed: getting stakeholders involved early makes everything run more smoothly. With decision-makers on board from the start, it’s easier to align on goals, make faster decisions, and avoid surprises later. The experience confirmed that early buy-in is key to a focused, efficient project.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <a class="project__gallery" href="https://onrobot.com" target="_blank">
            <img src="{{ asset('media/projects/onrobot-gallery.jpg') }}" alt="Visit website" />

            <span class="btn is-large">Visit website</span>
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
                    "name": "OnRobot case study"
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
    "description": "As their marketing and sales ambitions grew, OnRobot needed a new website that could keep pace and enable their team to build modular landing pages, launch campaigns, and run A/B tests independently, without relying on external developers.",
    "headline": "OnRobot case study",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Website, Web development, UX design, UI design, Statamic, Laravel",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "OnRobot case study",
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
                "name": "OnRobot case study"
            }
        }
    ]
}
</script>
@endpush