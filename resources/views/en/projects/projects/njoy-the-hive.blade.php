@section('title', 'nJoy case study')
@section('description', 'DAI-TECH, the fast-growing company behind the nJoy brand, quickly outgrew their existing software infrastructure and needed a custom-built integrated solution. They employed us to deliver a product lifecycle management tool, created from the ground up to fit their particular needs.')
@section('preview_image', asset('media/projects/njoy-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">nJoy - The Hive</h2>
        <h3 class="project__intro">
            The Hive is a powerful product-lifecycle management tool, created from the ground up.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Background</h4>
                    <p>
                        DAI-TECH was founded in 2010 around the common purpose of doing something different and better than what the market had to offer. Under the nJoy brand, they develop consumer oriented IT products meant to be sold as standalone items on the shelves of retail chains. Currently, nJoy is present in 10 countries in Central Europe and the Balkans.
                    </p>
                    <p>
                        They employed us to deliver an ERP system, called The Hive, created from the ground up to fit their particular needs.
                    </p>
                    <div class="project__stats">
                        <div class="project__stat">
                            <span>20<small>%</small></span> faster product<br />development
                        </div>
                        <div class="project__stat is-downward">
                            <span>30<small>%</small></span> decrease in<br />man-hours
                        </div>
                    </div>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/njoy-logo.svg') }}" alt="nJoy" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        The Hive initially consisted of a product lifecycle management (PLM) module, which we delivered in late 2011. Work didn't stop there: in the past {{ date('Y') - 2011 }} years we added CRM, sales, logistics, forecast, service center and call center modules, fully digitizing nJoy's internal processes.
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
                        <h4 class="heading-1">How we addressed nJoy's main business needs</h4>
                        <p>
                            We worked together with the nJoy management, IT and design teams to understand their workflow and translate this business logic into an easy to use and scalable system. This system would act as a collaboration hub between nJoy, it's suppliers, service centers and distributors.
                        </p>
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Product management was unreliable</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>
                            Before The Hive was built, nJoy relied on multiple software and spreadsheets to manage their products. This process was unnecessarily time-consuming and error-prone.
                        </p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>
                            We created a tailor-made <strong>product lifecycle management tool</strong>, which allows nJoy to manage the most important steps in the lifespan of their products, from development and manufacturing, to distribution and logistics.
                        </p>
                        <p>
                            Automatic control points, approval mechanisms and clear overviews regarding progress and responsibilities make tracking the status of a product a breeze.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/njoy-overview-1.gif') }}" alt="nJoy - The Hive - Product management was unreliable" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Communication with suppliers involved multiple channels</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>
                            Prior to the development of The Hive, all communication with the suppliers was done by email or communication tools like Skype. This soon led to the creation of data silos and a lot of valuable information and feedback was lost.
                        </p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>
                            Our solution was to <strong>integrate supplier communications</strong> into the software. Now, suppliers can actively collaborate, access information or comment on products. Since everything is structured in a single software, no more information is ever lost!
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/njoy-overview-2.gif') }}" alt="nJoy - The Hive - Communication with suppliers involved multiple channels" />
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Planning, tracking and collaboration on projects was unstructured</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>
                            There are lots of tasks to be done outside of product development as well. Soon, nJoy felt the need for a better system to track all the tasks and responsibilities of team members.
                        </p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>
                            We created a <strong>task management</strong> module that seamlessly integrates with all the other modules.
                        </p>
                        <p>
                            Apart from the usual functions like reminders, notifications, priorities and assignees, each module can automatically generate tasks for a team member, or even an entire team based on pre-set rules and workflows.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/njoy-overview-3.gif') }}" alt="nJoy - The Hive - Planning, tracking and collaboration on projects was unstructured" />
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
                        <img class="project__testimonial__picture" src="{{ asset('img/testimonials-adorian-demeter.png') }}" alt="nJoy - The Hive Adorian Demeter testimonial" />
                        <cite class="project__testimonial__author">Adorian DEMETER</cite>
                        <span class="project__testimonial__title">General Manager at nJoy</span>
                        <blockquote class="project__testimonial__content">
                            <p>
                                "I couldn't imagine how developing products would work without The Hive. Since its introduction, development of new products is 20% faster and all our data is organized and easy to manage."
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
                        Plan for the future
                    </h5>
                    <p>
                        We knew, that as the company and it's IT requirements will grow, so will the need that the system be able to handle the increasing amount of data and the quick development of new components.
                    </p>
                    <p>
                        A lot of thought went into designing a modular architecture that runs on dedicated servers, making it easily scalable.
                    </p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Never underestimate data migration
                    </h5>
                    <p>
                        Thanks to some thorough business requirements analysis, we quickly found out what nJoy's plans were with the software for the future. This meant that we knew that a lot of data will need to be migrated from pre-existing software.
                    </p>
                    <p>
                        Armed with this knowledge, we set out with a clear migration strategy from the get-go. We came up with a data strategy plan, a robust database architecture and a set of custom APIs to prevent data duplication and creating data silos.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <a class="project__gallery" data-toggle="modal" data-target="#gallery-modal">
            <img src="{{ asset('media/projects/njoy-gallery.jpg') }}" alt="Open gallery" />

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
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/njoy-gallery-1.jpg') }}" alt="nJoy - The Hive" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Product creation</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    Creating products (also called Part Numbers) is made easy by the category structure, which you can see here.
                                </p>
                                <p>
                                    For each category, nJoy product managers can define a list of attributes in the category structure builder. For example, for a monitor they could define a diagonal or resolution attribute. They also define a part number rule for each category.
                                </p>
                                <p>
                                    When all the attributes and rules are in place, adding a new product is as easy as selecting values from a list. The part number, all the necessary tasks and workflow for developing a new product will be automatically created.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/njoy-gallery-2.jpg') }}" alt="nJoy - The Hive" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Products dashboard</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    The products dashboard is the central hub of The Hive. This screen gives a complete overview of all the products in development and all the outstanding product development tasks that have to be done.
                                </p>
                                <p>
                                    Product statuses and the progress are color-coded for easy reading. This screen also allows for detailed filtering by any attribute value on the products, which allows for an easy generation of reports.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/njoy-gallery-3.jpg') }}" alt="nJoy - The Hive" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Product activity log</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    Apart from knowing what work needs to be done on a product, it's also important to know what has been done in the past.
                                </p>
                                <p>
                                    The Hive logs every user action: edits, deletions, status changes or file revisions. This allows the nJoy team to work with peace of mind, knowing every error can be traced back and corrected.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/njoy-gallery-4.jpg') }}" alt="nJoy - The Hive" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Purchase orders</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    Once a product design and development is done, and the product is ready to be manufactured, nJoy can create purchase orders right in The Hive.
                                </p>
                                <p>
                                    Manufacturers and other suppliers are able to then log in The Hive, download product sheets, bills of material and other data. True supplier collaboration can now begin: they can comment and give feedback on product revisions.
                                </p>
                                <p>
                                    Once a product revision is considered to be final by both parties, PO's can be accepted, and manufacturing can finally begin.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/njoy-gallery-5.jpg') }}" alt="nJoy - The Hive" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Logistics</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    After manufacturing begins, products start to arrive into the warehouse.
                                </p>
                                <p>
                                    The logistics module helps with registering inbound products, moving goods between warehouses and delivering orders, while maintaining total traceability.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/njoy-gallery-6.jpg') }}" alt="nJoy - The Hive" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Task management</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    Each of the above workflow is made up of a lot repeatable tasks. The product development team has one workflow, the design team another. Even external suppliers, like manufacturers, service centers or call centers can have tasks assigned to them.
                                </p>
                                <p>
                                    We gave every module the ability to automatically register task lists for team and individuals when specific workflows are triggered.
                                </p>
                                <p>
                                    For tasks that cannot be fit into a workflow, we also have the ability to add these manually and assign them to a colleague.
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
                    "name": "nJoy case study"
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
    "description": "DAI-TECH, the fast-growing company behind the nJoy brand, quickly outgrew their existing software infrastructure and needed a custom-built integrated solution. They employed us to deliver a product lifecycle management tool, created from the ground up to fit their particular needs.",
    "headline": "nJoy case study",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "PLM, Product lifecycle management, ERP, Codeigniter",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "nJoy case study",
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
                "name": "nJoy case study"
            }
        }
    ]
}
</script>
@endpush