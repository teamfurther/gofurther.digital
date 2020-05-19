@extends('en.site', ['bodyClass' => 'has-hero'])

@section('title', 'Custom Software Development Agency in Hungary and Romania')
@section('description', 'Further helps you by providing customer-centric digital solutions that are tailored specifically to your needs.')

@section('content')
    <section class="hero is-pearl">
        <div class="hero__video">
            <a class="hero__video__thumb" data-toggle="modal" data-target="#video-modal">
                <img src="{{ asset('img/presentation-video-thumb.png') }}" alt="Watch our presentation video" />
            </a>
        </div>
        <a class="hero__cta" data-toggle="modal" data-target="#video-modal">
            Want to know how we can help you?<strong>Watch now</strong>
        </a>
        <a class="hero__scroll" href="{{ url('#intro') }}"></a>
    </section>

    <section class="section is-dark" id="intro">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12-tablet is-5-widescreen">
                    <h2 class="hero-heading">
                        Your <strong class="is-pearl">time is too valuable</strong> to waste it on tasks that can be automated.
                    </h2>
                </div>
                <div class="column is-offset-1-widescreen">
                    <p>
                        Are you wasting valuable time on tasks that can be done by software? Are you missing vital data to make informed decisions? Are you in manufacturing? Retail? Services? It doesn't matter!
                    </p>
                    <p>
                        A carefully though through software can automate and organize your workflows which leads to increased productivity.
                    </p>
                    <p>
                        We can help you by providing customer-centric digital solutions: we take our time to better understand your business, which in turn allows us to build software solutions that are tailored specifically to your needs.
                    </p>
                    <p>
                        With over {{ config('site.stats.company_age') }} years of business software development experience, we became experts in crafting solutions that will help automate your processes, organized your data and make your business grow.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-cobalt">5 telltale signs</strong> that you need to invest in software:
                    </h2>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">1</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h3 class="heading-4">
                        You don't have easy access<br />to information about your business
                    </h3>
                    <p>
                        The pace of business is faster than ever. Efficient business intelligence is reliant on being able to quickly analyse data, but if your information is spread across multiple Excel spreadsheets or even worse, on paper, you and your team members will remain in the dark.
                    </p>
                    <p>
                        By consolidating and centralising all the information in a software system, you will be able to get a holistic view of operations at any given time and leverage the power of business intelligence.
                    </p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h3 class="heading-4">
                        You're wasting time on<br />tasks that can be automated
                    </h3>
                    <p>
                        According to a <a href="https://www.mckinsey.com/featured-insights/future-of-work/jobs-lost-jobs-gained-what-the-future-of-work-will-mean-for-jobs-skills-and-wages#part1" target="_blank">report by McKinsey</a> nearly 60% of office workers estimate they could save at least 6 hours a week with automation. An integrated software solution can handle all your processes end-to-end, so your employees spend their high-value hours on high-value work.
                    </p>
                    <p>
                        We found that the biggest productivity boosters are automated sign-offs, status updates and data collection. This not only reduces time spent on repetitive work, but also the rate of human errors.
                    </p>
                    <p>
                        The additional benefit of this is that your team will see automation in a positive light, with the potential to make their work and personal lives better.
                    </p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">3</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h3 class="heading-4">
                        You're running on an<br />outdated IT infrastructure
                    </h3>
                    <p>
                        Being reliant on your IT department, frequent hardware upgrades or constantly increasing licensing costs are telltale signs that you're using an outdated IT infrastructure.
                    </p>
                    <p>
                        Two-thirds of mid-size businesses are running outdated versions of their business software, sapping time, money and critical resources.
                    </p>
                    <p>
                        Rather than patching an already outdated system, it's often better to switch to a modern software solution which can give you the agility to promptly respond to changing business requirements.
                    </p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">4</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h3 class="heading-4">
                        You're relying on<br />multiple software systems
                    </h3>
                    <p>
                        Most businesses run various software to manage different areas of operation. A CRM to support the sales team, an inventory system, an accounting software, and so on.
                    </p>
                    <p>
                        Although they work great for the department where they're is used, a lot of the information they contain is invisible to the rest of the team.
                    </p>
                    <p>
                        Duplicating data across systems is an error-prone and ultimately unnecessary process. With a software solution that acts as a single source of information, everyone has access to the same accurate, up-to-date knowledge, allowing them to make better decisions.
                    </p>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">5</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h3 class="heading-4">
                        You're missing out on the<br />advantages of cloud and mobile solutions
                    </h3>
                    <p>
                        Nowadays if your team isn't able to access information and progress with work wherever they are, you're losing out to your competitors. Think of your sales team who don't have access to stock availability when out in the field or management not having access to reports when in a business meeting.
                    </p>
                    <p>
                        Modern cloud-based software is quickly scalable, cheaper to maintain and they offer responsive interfaces for every mobile device, which allows your team to access and update information on the move, constantly driving your business forward.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact', [
        'buttonText' => 'We can help',
        'headingText' => 'Want to kickstart you business?'
    ])

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-tangerine">Kind words</strong> from clients who already chose us:
                    </h2>
                </div>
            </div>
            <div class="columns has-margin-b60">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="project__testimonial__picture" src="{{ asset('img/testimonials-attila-szegedi.png') }}" alt="Brewie Attila Szegedi testimonial" />
                    <blockquote class="project__testimonial__content">
                        <p>
                            Further customized their own CMS called Chronos to suit our needs. It now serves as the core of our knowledge platform. The platform is working perfectly, allowing us to store and share a huge amount of information about our machine and beer brewing.
                        </p>
                        <cite class="project__testimonial__author">Attila SZEGEDI, Brewie</cite>
                    </blockquote>
                </div>
            </div>
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="project__testimonial__picture is-right-aligned" src="{{ asset('img/testimonials-adorian-demeter.png') }}" alt="nJoy - The Hive Adorian Demeter testimonial" />
                    <blockquote class="project__testimonial__content">
                        <p>
                            I couldn't imagine how developing products would work without The Hive. Since its introduction, development of new products is 20% faster and all our data is organized and easy to manage.
                        </p>
                        <cite class="project__testimonial__author">Adorian DEMETER, nJoy</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.projects')
@endsection



@push('content-modals')
<div class="modal is-centered-vertical" id="video-modal" tabindex="-1" role="dialog">
    <div class="modal__dialog is-large">
        <div class="modal__content">
            <div class="video-container">
                <iframe width="880" height="495" src="https://www.youtube.com/embed/ac0F4Woqso4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    "@id": "{{ localizedRoute('home') }}",
                    "name": "Homepage"
                }
            },
            {
                "@type": "ListItem",
                "position": "2",
                "item": {
                    "@id": "{{ localizedRoute('services.custom-development') }}",
                    "name": "Custom software development"
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
    "description": "Further helps you by providing customer-centric digital solutions that are tailored specifically to your needs.",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Custom software development, Integrated software solutions, ERP development, Software development, Web development",
    "mainEntityOfPage": "{{ localizedRoute('services.custom-development') }}",
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
                "@id": "{{ localizedRoute('services.custom-development') }}",
                "name": "Custom software development"
            }
        }
    ]
}
</script>
@endpush
