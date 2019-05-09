@section('title', 'Steiger ERP')
@section('description', 'We were contacted by the management representatives of Steiger, to develop a system that would automate their workflow and improve the reliability of their processes. Prior to this, Steiger was relying on multiple software and spreadsheets to track their work, which they soon realised was ineffective and prone to errors.')
@section('preview_image', asset('media/projects/steiger-illustration-1.png'))

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Steiger ERP</h1>
                    <div class="project__summary">
                        <div class="columns">
                            <div class="column">
                                <h2 class="project__summary__heading">Executive summary</h2>
                                <p>We were contacted by the management representatives of Steiger, to develop a system that would automate their workflow and improve the reliability of their processes. Prior to this, Steiger was relying on multiple software and spreadsheets to track their work, which they soon realised was ineffective and prone to errors.</p>
                                <p>Our software helps them track all the work done by different departments from customer relations and sales to manufacturing.</p>
                            </div>
                            <div class="column">
                                <img class="is-pulled-right-tablet" src="{{ asset('media/projects/steiger-illustration-1.png') }}" alt="Case studies: Steiger ERP" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-hidden-touch">
                    <img src="{{ asset('media/projects/steiger-logo.png') }}" alt="Case studies: Steiger logo" />
                </div>
                <div class="column">
                    <h2 class="heading-2">The Client</h2>
                    <p>At its core, Steiger is a family business, being involved in the metalworking industry for several generations. The company was founded in Carei in 1994 and has seen a constant growth ever since. Today it has over 100 staff, a 3-aisle production hall with 7 bridge cranes and specialised workshops with precision machines and equipment. Their portfolio of metal processing services and the manufacturing of locksmith products includes some of the area’s most significant civil and industrial constructions.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">The Challenge</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>While developing the software, together with the Steiger team we identified the major challenges for which we needed to come up with solutions.</p>
                    <p>Our first challenge was that the software would have to work both on offices, on the go or in the production hall. This meant that we had to find a way to display large amount of information and files on responsive interfaces. Another issue related to user experience was that workers in the production hall had to be able to interact with the software while wearing protective gloves.</p>
                    <p>Our second challenge was replacing the existing sales system. Price estimates and quotes were done manually with the help of multiple spreadsheets. This process was cumbersome and error-prone, finding an automated solution was essential, but not trivial, because of the sheer amount of data and the complex computations necessary.</p>
                </div>
                <div class="column">
                    <img class="is-pulled-right-tablet" src="{{ asset('media/projects/steiger-illustration-2.jpg') }}" alt="Case studies: Steiger ERP" />
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half">
                    <h2 class="heading-2">The Solution</h2>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column">
                    <p>Our UX designers and development team worked very closely with the Steiger team to find solutions for the above challenges. We put in multiple hours of designing the information hierarchy, UX research and wireframing to make sure all the essential data is conveniently handily available. Also, a lot of care went into preparing to make sure that even workers without any computer training can use the system. Our development team also purpose-built a CAD file viewer that enables effortless viewing of CAD drawings throughout the application.</p>
                    <p>We also had to find a solution to enable the use of the application in the production hall, which is not a computer-friendly environment. Touch-screen tablets were also out of the question because workers have to wear industrial-grade protective gloves. We proposed a solution which involves a couple of terminals which are connected to QR code scanners. Workers log on using their RFID cards, after which they use QR codes to pull up drawings or start and stop logging time on their timesheets.</p>
                    <p>The quote system proved to be a challenge not only from a UX perspective, but also from a business analysis and development standpoint. Each quote requires over 50 criteria and complex formulas to compute. We worked closely with the Steiger management and sales teams to eliminate as many variables and simplify the process as much as possible. In the end, we managed to come up with a solution that correctly estimates labour costs and material needs based on available workload and stock levels.</p>
                </div>
                <div class="column">
                    <img src="{{ asset('media/projects/steiger-illustration-3.jpg') }}" alt="Case studies: Steiger ERP" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__stats">
            <div class="container">
                <div class="columns is-mobile is-multiline">
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">23<small>%</small></span>
                        <span class="project__stats__description">munkaóra csökkenés</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">2100<small>+</small></span>
                        <span class="project__stats__description">projects since 2017</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">75</span>
                        <span class="project__stats__description">employees using the system</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">9</span>
                        <span class="project__stats__description">modules</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__tech-stack">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h2 class="heading-2">Technology Stack</h2>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <ul class="project__tech-stack__list">
                            <li>Laravel</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>Javascript</li>
                            <li>nginx</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__gallery">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-2">Want to see more of this project?</div>
                        <a class="btn is-large is-primary" data-toggle="modal" data-target="#project-gallery">Visit the gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">Other Case Studies</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    @include(getLang() . '.projects.excerpts.njoy-the-hive')
                </div>
                <div class="column">
                    @include(getLang() . '.projects.excerpts.profnet-elearning-platform')
                </div>
            </div>
        </div>
    </section>
@endsection

@push('content-modals')
    <div class="modal" id="project-gallery" tabindex="-1" role="dialog">
        <div class="modal__dialog is-large">
            <div class="modal__content">
                <div class="modal__header">
                    <a class="modal__close" data-dismiss="modal">&times;</a>
                    <h3 class="modal__title">Steiger ERP</h3>
                    <span class="modal__subtitle">ERP Software</span>
                </div>
                <div class="modal__body">
                    <img src="{{ asset('media/projects/steiger-gallery-1.jpg') }}" alt="Case studies: Steiger ERP Gallery" />
                    <img src="{{ asset('media/projects/steiger-gallery-2.jpg') }}" alt="Case studies: Steiger ERP Gallery" />
                    <img src="{{ asset('media/projects/steiger-gallery-3.jpg') }}" alt="Case studies: Steiger ERP Gallery" />
                    <img src="{{ asset('media/projects/steiger-gallery-4.jpg') }}" alt="Case studies: Steiger ERP Gallery" />
                </div>
            </div><!-- /.modal__content -->
        </div><!-- /.modal__dialog -->
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
                    "name": "Our work"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
                    "name": "Steiger ERP"
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
    "description": "We were contacted by the management representatives of Steiger, to develop a system that would automate their workflow and improve the reliability of their processes. Prior to this, Steiger was relying on multiple software and spreadsheets to track their work, which they soon realised was ineffective and prone to errors.",
    "headline": "Steiger ERP",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "ERP, Laravel",
    "mainEntityOfPage": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
    "name": "Steiger ERP",
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
                "name": "Our work"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
                "name": "Steiger ERP"
            }
        }
    ]
}
</script>
@endpush
