@section('title', 'Kompozit case study')
@section('description', 'Kompozit is a field service management solution for documenting the work of service teams in an easy and efficient way.')
@section('preview_image', asset('media/projects/kompozit-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <div class="container">
            <h2 class="project__title">Kompozit</h2>
            <h3 class="project__intro">
                Kompozit is a field service management solution for documenting the work of service teams in an easy and efficient way.
            </h3>
        </div>

        <img class="project__hero" src="{{ asset('media/projects/kompozit-hero.svg') }}" alt="Kompozit Field Service Management App" />
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Background</h4>
                    <p>Kompozit is our first in-house product, created with the purpose of making fieldwork manageable through a single digital platform. Our goal was to build an app that is easy to use by anyone working in the field, and that simplifies accounting for both customers and employees.</p>
                    <p>The end product is two-part. On the one hand, there is a web application which allows for the creation and management of jobs, and is also responsible for generating detailed reports. On the other hand, there is a cross-platform mobile application which can be used in the field to accurately document the jobs done.</p>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/kompozit-logo.svg') }}" alt="Kompozit" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        Within the first week after launch, Kompozit already had 3 companies onboarded on a trial period.<br />6 months after release, we can proudly say that our churn rate still stands at 0%!
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
                        <h4 class="heading-1">What problems did we solve?</h4>
                    </div>
                </div>
                <div class="columns has-margin-b90">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">All the information is stored in one digital space</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>Let's face it. Field workers hate doing paperwork. And even if they do fill out the worksheets, they often get lost or damaged in the boot of the car. Missing worksheets lead to inaccurate reporting and hindering decisions. Incomplete worksheets may lack crucial information about the tasks performed, materials used, or work hours logged. This can lead to gaps in understanding the scope of work, making it challenging for both field workers and office staff to assess the project's progress or provide accurate billing.</p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>With our solution every piece of information can be found and tracked in a single digital space. Digital worksheets streamline processes by allowing easy data entry, retrieval, and sharing. This enhances overall efficiency and reduces time spent searching for or recreating lost documents.</p>
                    </div>
                    <div class="column">
                        <img class="is-pulled-right" src="{{ asset('media/projects/kompozit-overview-1.png') }}" alt="Kompozit - All the information is stored in one digital space" />
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Real-time communication</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>Another issue we found during our research was that most companies do their accounting near the end of the month. Any inconsistencies or missing information in documents was really hard to remedy by this time, since nobody remembered what happened on site, weeks ago.</p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>Kompozit enables field workers to record their working hours, material use and photo documentation which can be accessed by office staff and management instantaneously.</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/kompozit-overview-2.png') }}" alt="Kompozit - Real-time communication" />
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
                        Never cut corners on research
                    </h5>
                    <p>Before writing a single line of code, we conducted several interviews to assess the needs of our future customers in order to create the most reliable product. This led to the creation of multiple wireframe and interactive Figma prototypes, which we used to conduct a second round of interviews. The knowledge we uncovered during these discovery sessions have led to the successful release of the product.</p>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Balancing feature requests is not easy
                    </h5>
                    <p>One of our main challenges during the discovery phase and after beta testing was cherry picking which features to include. As customers started using the product, they immediately started generating more and more ideas for possible new features.</p>
                    <p>But since the primary selling point of Kompozit is its ease of use, we have to be extra careful when deciding which features to include. So we went back to the basics, and before developing a feature, we always create a prototype first. If client feedback is positive, we add the feature to the roadmap, otherwise it gets nipped in the bud.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <a class="project__gallery" href="https://kompoz.it" target="_blank">
            <img src="{{ asset('media/projects/kompozit-gallery.jpg') }}" alt="Visit website" />

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
                    "name": "Kompozit case study"
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
    "description": "Kompozit is a field service management solution for documenting the work of service teams in an easy and efficient way.",
    "headline": "Kompozit case study",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "App, Field Service Management, FSM, Flutter, Kompozit",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "Kompozit case study",
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
                "name": "Kompozit case study"
            }
        }
    ]
}
</script>
@endpush