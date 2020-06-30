@extends('en.site', ['bodyClass' => 'has-hero'])

@section('content')
    <section class="hero is-cobalt">
        <h2 class="hero-heading">
            <small>Software that helps you</small>
            Be efficient. Get organized.<br />
            <strong class="is-tangerine">Go Further.</strong>
        </h2>
        <a class="hero__cta" href="{{ localizedRoute('contact') }}">
            Have an idea you want to discuss?<strong>Let's talk</strong>
        </a>
        <a class="hero__scroll" href="#partners"></a>
    </section>

    <section class="section is-dark has-padding-b30" id="partners">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-9-desktop">
                    <h2 class="hero-heading">
                        Having a tough time finding a <strong class="is-raspberry">reliable</strong> software agency?
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-5-tablet">
                    <p class="has-margin-b30">
                        You're looking for a partner, not a supplier. You want a company that goes beyond the brief. You want somebody to take you <span class="has-text-underlined">Further</span>.
                    </p>
                    <p>
                        We are a team of developers, system architects, designers and business analysts. Our clients have been with us on average for {{ config('site.stats.avg_years') }} years, which we believe shows our commitment to creating quality products and building long-term partnerships with our customers.
                    </p>
                </div>
                <div class="column is-6-tablet is-offset-1-tablet">
                    <div class="columns is-mobile is-multiline">
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/png.png') }}" alt="Procter & Gamble" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/njoy.png') }}" alt="nJoy" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/msd.png') }}" alt="MSD Pharma" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/praktiker.png') }}" alt="Praktiker Hungary" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/harborsz.png') }}" alt="Harborsz Logistic" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/ovsz.png') }}" alt="Hungarian National Blood Transfusion Service" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/onrobot.png') }}" alt="OnRobot" />
                        </div>
                        <div class="column is-6-mobile is-6-tablet is-3-desktop has-margin-b60">
                            <img src="{{ asset('media/partners/steiger.png') }}" alt="Steiger" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="services">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12-tablet is-5-widescreen">
                    <h2 class="hero-heading">
                        We turn your ideas into digital products <strong class="is-pearl">that work.</strong>
                    </h2>
                </div>
                <div class="column is-offset-1-widescreen">
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/home-services-digital-transformation-icon.png') }}" alt="Digital transformation" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Digital<br />transformation</h3>
                            <p>
                                The shift to digital will disrupt all industries. Let us help you understand how it can help your business and how you can embrace the opportunities it brings.
                            </p>
                            <a class="btn is-pearl" href="{{ localizedRoute('services.digital-transformation') }}">Read more</a>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/home-services-custom-development-icon.png') }}" alt="Custom software development" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Custom<br />software development</h3>
                            <p>
                                We can take care of all your custom development needs, from business analysis, through design to implementation, all tailor-made for you.
                            </p>
                            <a class="btn is-pearl" href="{{ localizedRoute('services.custom-development') }}">Read more</a>
                        </div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/home-services-mvp-development-icon.png') }}" alt="MVP development" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">MVP<br />development</h3>
                            <p>
                                By using agile and design thinking methods, we are able to swiftly deliver working solutions and allow you to see measurable value right away.
                            </p>
                            <a class="btn is-pearl" href="{{ localizedRoute('services.mvp-development') }}">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.projects')

    <section class="section" id="laravel-vue">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-9-desktop">
                    <h2 class="hero-heading">
                        We're <strong class="is-raspberry">proficient</strong> in Laravel + Vue.js.
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet">
                    <p>We love frameworks like Laravel and Vue.js. Their rich set of features and community contributed packages allow us to reduce development times and costs. We also have a deep understanding of how these tools work, which helps us write clean, maintainable and scalable code.</p>
                    <p>Laravel is the most popular PHP framework, while Vue.js is quickly becoming a favourite among Javascript developers. They both have an outstanding community supporting them, and here at Further, we're making an effort to give back by contributing to code and community projects alike.</p>
                </div>
                <div class="column has-text-right is-4-tablet is-centered-vertical is-hidden-mobile">
                    <img src="{{ asset('img/home-laravel-vuejs.png') }}" alt="Laravel & Vue.js" />
                </div>
            </div>
        </div>
    </section>

    <section class="section has-padding-b0">
        <div class="banner--laravel-meetup">
            <img src="{{ asset('img/laravel-meetup.png') }}" alt="Laravel Hungary Meetup" />
            <div class="heading-3">We are proud organisers of the Laravel Hungary meetup!</div>
        </div>
    </section>

    <section class="section">
        <div class="contact__homepage">
            <div class="container">
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-6-widescreen">
                        <h2 class="hero-heading">
                            Let's start something <strong class="is-tangerine">together!</strong>
                        </h2>

                        <p class="has-margin-b30">
                            Do you have an idea, project or partnership proposal?<br />We're always willing and ready to listen to any request. So, if you like our work and you want to discuss, just grab your phone or keyboard and contact us.
                        </p>

                        <div class="h-card vcard">
                            <div class="p-tel tel"><a href="tel:{{ str_replace(' ', '', config('site.contact.phone-1')) }}" class="value">HU: {{ config('site.contact.phone-1') }} </a></div>
                            <div class="p-tel tel"><a href="tel:{{ str_replace(' ', '', config('site.contact.phone-2')) }}" class="value">RO: {{ config('site.contact.phone-2') }}</a></div>
                            <div class="u-email email"><a href="mailto:{{ config('site.contact.email') }}" class="value">{{ config('site.contact.email') }}</a></div>
                        </div>
                    </div>
                    <div class="column is-12-tablet is-6-widescreen">
                        <form class="contact__form" id="contact-form" action="{{ localizedRoute('contact.send') }}" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group {{ isset($errors) && $errors->has('name') ? 'has-error' : '' }}">
                                <input class="form-control" name="name" placeholder="Your name*" type="text" value="{{ old('name') }}" autocomplete="name" tabindex="1" required />
                            </div>
                            <div class="form-group {{ isset($errors) && $errors->has('company') ? 'has-error' : '' }}">
                                <input class="form-control" name="company" placeholder="Company name or website" type="text" value="{{ old('company') }}" autocomplete="organization" tabindex="2" />
                            </div>
                            <div class="is-pulled-left">
                                <div class="form-group {{ isset($errors) && $errors->has('email') ? 'has-error' : '' }}">
                                    <input class="form-control" name="email" placeholder="Your email address*" type="email" value="{{ old('email') }}" autocomplete="email" tabindex="3" required />
                                </div>
                            </div>
                            <div class="is-pulled-right">
                                <div class="form-group {{ isset($errors) && $errors->has('phone') ? 'has-error' : '' }}">
                                    <input class="form-control" name="phone" placeholder="Your phone number" type="text" value="{{ old('phone') }}" autocomplete="tel" tabindex="4" />
                                </div>
                            </div>
                            <div class="form-group {{ isset($errors) && $errors->has('message') ? 'has-error' : '' }}">
                                <textarea class="form-control" name="message" placeholder="Message*" rows="5" tabindex="5" required>{{ old('message') }}</textarea>
                            </div>
                            {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                            <button class="btn is-large is-pearl" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    "@id": "{{ localizedRoute('home') }}",
                    "name": "Homepage"
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
    "keywords": "Custom software development, Software development, Web development, MVP development, Digital transformation",
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
        }
    ]
}
</script>
@endpush
