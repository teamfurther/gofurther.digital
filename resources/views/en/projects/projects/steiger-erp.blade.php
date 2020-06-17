@section('title', 'Steiger ERP case study')
@section('description', 'We were contacted by the management representatives of Steiger, to develop a system that would automate their workflow and improve the reliability of their processes.')
@section('preview_image', asset('img/projects/steiger-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">Steiger ERP</h2>
        <h3 class="project__intro">
            Our software helps <span class="is-hidden-mobile">metalworking specialists </span>Steiger track the work done by its various departments from customer relations to manufacturing.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Background</h4>
                    <p>
                        Steiger is a family business at its core, being involved in steel structure production, industrial construction and machining since 1994.
                        In 2015 they hired us to develop a system that would automate their workflows and improve the reliability of their processes.
                    </p>
                    <div class="project__stats">
                        <div class="project__stat is-downward">
                            <span>23<small>%</small></span> decrease in<br />working hours
                        </div>
                        <div class="project__stat">
                            <span>73</span> everyday<br />users
                        </div>
                    </div>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('img/projects/steiger-logo.svg') }}" alt="Steiger" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        The ERP system was implemented by June 2016, and since then it had a huge impact on how Steiger employees work, achieving positive return on investment after just 11 months.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__overview">
            <div class="container">
                <div class="columns has-margin-b90">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <h4 class="heading-1">How we identified and resolved the problems</h4>
                        <p>
                            We had on-site interviews and discussions with Steiger's technical manager and some of the production workers to find out more about the process and about how each employee contributes to the end-result. <strong>During our discussions 3 main problems surfaced.</strong> This helped us focus on the features that mattered the most.
                        </p>
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Creating offers was time-consuming and error-prone</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>
                            Offers were put together manually with the help of multiple Excel spreadsheets, which contained over 50 criteria and complex computations.
                        </p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>
                            We worked closely together with the Steiger management and sales teams <strong>to eliminate variables and data duplication and to simplify the process</strong> as much as possible.
                        </p>
                        <p>
                            In the end, we managed to come up with a solution that correctly <strong>estimates labour costs and material needs based on available workload and stock levels.</strong>
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('img/projects/steiger-overview-1.gif') }}" alt="Steiger - Creating offers was time-consuming and error-prone" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Stock levels were unavailable</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>
                            We observed that there was no system to track leftover materials and most of it was eventually scrapped. This was a huge source of waste, which required and urgent solution.
                        </p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>
                            We set up a <strong>supply chain and inventory system</strong> which allows Steiger to qualify and review suppliers, make purchases, and keep track of their current stock levels.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('img/projects/steiger-overview-2.gif') }}" alt="Steiger - Stock levels were unavailable" />
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Manufacturing times were not measured</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>
                            We found out that workers were not actively clocking time. Because they were wearing industry-grade protective gloves, working with the tablet PCs installed to track time was cumbersome. So they stopped using them, and management started missing out on essential production data.
                        </p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>
                            We developed a <strong>QR code based system</strong> which allows workers to quickly track the manufacturing stage a product is in and the materials they're using. Daily timesheets are automatically generated.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('img/projects/steiger-overview-3.gif') }}" alt="Steiger - Manufacturing times were not measured" />
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
                        Get the opinion of everybody involved
                    </h5>
                    <p>
                        One of the first problems we faced was that most of the employees were hesitant about using a new software.
                    </p>
                    <p>
                        Once we interviewed them and found out exactly what their pain-points were, it was much easier for us to come up with a solution that they would embrace.
                    </p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Management is not always right
                    </h5>
                    <p>
                        A lot of management's ideas were very different to those of their employees. But it was the employees who were going to actually use the product.
                    </p>
                    <p>
                        We quickly learned that for the success of the project, it was crucial to align the opinion of all the stakeholders.
                    </p>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">3</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Designing for all environments is hard
                    </h5>
                    <p>
                        Creating a user-interface that would work well in the offices, on the move on mobile devices and next to the production lines as well, is just as complicated as it sounds.
                    </p>
                    <p>
                        We called on an experienced user experience designer to help us. Together we put in multiple hours of research and developing a design system to make sure all the essential data is conveniently available.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <a class="project__gallery" data-toggle="modal" data-target="#gallery-modal">
            <img src="{{ asset('img/projects/steiger-gallery.jpg') }}" alt="Open gallery" />

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
                        <img class="project__gallery-modal__image" src="{{ asset('img/projects/steiger-gallery-1.jpg') }}" alt="Steiger ERP" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Project quotes</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    Most of Steiger's projects are long and complex. So is the process of generating exact price quotes.
                                </p>
                                <p>
                                    A lot of factors have to be taken into consideration: materials, different types of manual and machine processing, shipping and assembly.
                                </p>
                                <p>
                                    Thanks to the new quoting module, we reduced the time necessary to quote a project by 4x times compared to the old Excel spreadsheets.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('img/projects/steiger-gallery-2.jpg') }}" alt="Steiger ERP" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Inventory and supply chain</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    Once a project starts, the first step is the procurement of materials. The inventory and supply chain module helps Steiger keep track of the acquisition process.
                                </p>
                                <p>
                                    The inventory system tracks stock levels, material quality and certifications and forecasts material use based in the projects in the sales pipeline. It also hints operators when a material on stock could be used for a project.
                                </p>
                                <p>
                                    The supply chain system automates the purchasing workflow: it sends requests for quote to suppliers, allows them to upload price lists and product availability and handles supplier quality assurance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('img/projects/steiger-gallery-3.jpg') }}" alt="Steiger ERP" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Time tracking</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    Once execution starts, a lot of processes have to be tracked: manual labor, machine processing, material changeover and maintenance times.
                                </p>
                                <p>
                                    For tracking manual labour and material use we implement a QR code based system, which allows workers to easily track time when working in the production hall.
                                </p>
                                <p>
                                    We also gather information regarding machine production data to compute average material changeover times and schedule preventive maintenance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('img/projects/steiger-gallery-4.jpg') }}" alt="Steiger ERP" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Dashboard</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    The dashboard is a general manager's dreamland, with customizable KPI's galore.
                                </p>
                                <p>
                                    Just to name a few: lead conversion data, project delivery rates (in budget and in time), production data, HR reports and financial forecasts.
                                </p>
                                <p>
                                    It's also the place for the company-wide calendar, notifications and the individual task lists.
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
                    "name": "Steiger ERP case study"
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
    "description": "We were contacted by the management representatives of Steiger, to develop a system that would automate their workflow and improve the reliability of their processes.",
    "headline": "Steiger ERP case study",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "ERP, Laravel",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "Steiger ERP case study",
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
                "name": "Steiger ERP case study"
            }
        }
    ]
}
</script>
@endpush