@extends('en.site', ['bodyClass' => 'has-hero'])

@section('content')
    <section class="hero is-green">
        <div class="hero__video">
            <a class="hero__video__thumb" data-toggle="modal" data-target="#video-modal">
                <img src="{{ asset('img/presentation-video-thumb.png') }}" alt="Watch our presentation video" />
            </a>
        </div>
        <a class="hero__cta" data-toggle="modal" data-target="#video-modal">
            Want to know how we can help you?<strong>Watch now</strong>
        </a>
        <a class="hero__scroll" href="{{ url('#signs') }}"></a>
    </section>

    <section class="section" id="signs">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="hero-heading"><strong>5 signs</strong>that you need to invest in software</h2>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column has-text-centered is-3-mobile is-2-tablet is-offset-2-tablet is-1-desktop is-offset-3-desktop">
                    <div class="list-hero">1</div>
                </div>
                <div class="column is-9-mobile is-6-tablet is-5-desktop">
                    <h3 class="heading-4">You don't have easy access<br />to information about your business</h3>
                    <p>The pace of business is faster than ever. Efficient business intelligence is reliant on being able to quickly analyse data, but if your information is spread across multiple Excel spreadsheets or even worse, on paper, you and your team members will remain in the dark.</p>
                    <p>By consolidating and centralising all the information in a software system, management will be able to get a holistic view of operations at any given time, while other team members will have at their fingertips every piece of data they need to do their jobs effectively.</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column has-text-centered is-3-mobile is-2-tablet is-offset-2-tablet is-1-desktop is-offset-3-desktop">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-9-mobile is-6-tablet is-5-desktop">
                    <h3 class="heading-4">You're wasting time on<br />tasks that can be automated</h3>
                    <p>According to a <a href="https://www.mckinsey.com/featured-insights/future-of-work/jobs-lost-jobs-gained-what-the-future-of-work-will-mean-for-jobs-skills-and-wages#part1" target="_blank">report by McKinsey</a> nearly 60% of office workers estimate they could save at least 6 hours a week with automation. An integrated software solution can handle all your processes end-to-end, so your employees spend their high-value hours on high-value work.</p>
                    <p>We found that the biggest productivity boosters are automated sign-offs, status updates and data collection. This not only reduces time spent on repetitive work, but also the rate of human errors.</p>
                    <p>The additional benefit of this is that your team will see automation in a positive light, with the potential to make their work and personal lives better.</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column has-text-centered is-3-mobile is-2-tablet is-offset-2-tablet is-1-desktop is-offset-3-desktop">
                    <div class="list-hero">3</div>
                </div>
                <div class="column is-9-mobile is-6-tablet is-5-desktop">
                    <h3 class="heading-4">You're running on an<br />outdated IT infrastructure</h3>
                    <p>Being reliant on your IT department, frequent hardware upgrades or constantly increasing licensing costs are telltale signs that you're using an outdated IT infrastructure.</p>
                    <p>Two-thirds of mid-size businesses are running outdated versions of their business software, sapping time, money and critical resources.</p>
                    <p>Rather than patching an already outdated system, it's often better to switch to a modern software solution which can give you the agility to promptly respond to changing business requirements.</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column has-text-centered is-3-mobile is-2-tablet is-offset-2-tablet is-1-desktop is-offset-3-desktop">
                    <div class="list-hero">4</div>
                </div>
                <div class="column is-9-mobile is-6-tablet is-5-desktop">
                    <h3 class="heading-4">You're relying on<br />multiple software systems</h3>
                    <p>Most businesses run various software to manage different areas of operation. A CRM to support the sales team, an inventory system, an accounting software, and so on.</p>
                    <p>Although they work great for the department where they're is used, a lot of the information they contain is invisible to the rest of the team.</p>
                    <p>Duplicating data across systems is an error-prone and ultimately unnecessary process. With a software solution that acts as a single source of information, everyone has access to the same accurate, up-to-date knowledge, allowing them to make better decisions.</p>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column has-text-centered is-3-mobile is-2-tablet is-offset-2-tablet is-1-desktop is-offset-3-desktop">
                    <div class="list-hero">5</div>
                </div>
                <div class="column is-9-mobile is-6-tablet is-5-desktop">
                    <h3 class="heading-4">You're missing out on the<br />advantages of cloud and mobile solutions</h3>
                    <p>Nowadays if your team isn't able to access information and progress with work wherever they are, you're losing out to your competitors. Think of your sales team who don't have access to stock availability when out in the field or management not having access to reports when in a business meeting.</p>
                    <p>Modern cloud-based software is quickly scalable, cheaper to maintain and they offer responsive interfaces for every mobile device, which allows your team to access and update information on the move, constantly driving your business forward.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="cta cta--services">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="container">
                            <div class="heading-2">We can help you!</div>
                            <a class="btn is-large is-primary" href="{{ localizedRoute('solutions') }}">Learn how</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="hero-heading"><strong>Kind words</strong>from clients who already chose us</h2>
                </div>
            </div>
            <div class="columns has-margin-b60">
                <div class="column is-8-tablet is-offset-2-tablet">
                    <img class="project__testimonial__picture" src="{{ asset('img/testimonials-adorian-demeter.png') }}" alt="nJoy - The Hive Adorian Demeter testimonial" />
                    <blockquote class="project__testimonial__content">
                        <p>I couldn't imagine how developing products would work without The Hive. Since its introduction, development of new products is 20% faster and all our data is organized and easy to manage.</p>
                        <cite class="project__testimonial__author">Adorian DEMETER, nJoy</cite>
                    </blockquote>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet is-offset-2-tablet">
                    <img class="project__testimonial__picture is-right-aligned" src="{{ asset('img/testimonials-edina-bakk.png') }}" alt="Harborsz Edina Bakk testimonial" />
                    <blockquote class="project__testimonial__content">
                        <p>For us the greatest advantage of the Harborsz Logistics software is that it's a complete, integrated solution. We no longer have to carry-out our daily operations by switching between different systems and email.</p>
                        <p>This greatly reduced the frequency of errors and increased productivity.</p>
                        <cite class="project__testimonial__author">Edina BAKK, Harborsz Logistic</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="cta cta--projects">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="container">
                            <div class="heading-2">Take a look at our work</div>
                            <a class="btn is-large is-primary" href="{{ localizedRoute('projects') }}">Read our case studies</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    "@id": "{{ localizedRoute('home') }}",
                    "name": "Homepage"
                }
            },
            {
                "@type": "ListItem",
                "position": "2",
                "item": {
                    "@id": "{{ localizedRoute('custom-development') }}",
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
    "description": "{{ config('site.description.' . config('app.locale')) }}",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Custom software development, Integrated software solutions, ERP development, Web development",
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
                "@id": "{{ localizedRoute('custom-development') }}",
                "name": "Custom software development"
            }
        }
    ]
}
</script>
@endpush
