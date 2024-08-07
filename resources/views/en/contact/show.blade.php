@extends('en.site')

@section('title', 'Discuss your idea, project or partnership')
@section('description', 'New projects, partnerships or proposals; there is plenty to talk about. We are based in Budapest, Hungary and across Romania but work with clients all across Europe and beyond.')

@section('content')
    <section class="section">
        <div class="contact">
            <div class="container">
                <div class="columns">
                    <div class="column is-8-desktop is-offset-2-desktop">
                        <h2 class="hero-heading">
                            Let's start something <strong class="is-tangerine">together!</strong>
                        </h2>

                        <p class="has-text-centered">Do you have an idea, project or partnership proposal?<br />We're always willing and ready to listen to any request. So, if you like our work and you want to discuss, just grab your phone or keyboard and contact us.</p>

                        <form class="contact__form" id="contact-form" action="{{ localizedRoute('contact.send') }}" method="POST">

                            {{ csrf_field() }}

                            <div class="is-pulled-left">
                                <div class="form-group {{ isset($errors) && $errors->has('name') ? 'has-error' : '' }}">
                                    <input class="form-control" name="name" placeholder="Your name *" type="text" value="{{ old('name') }}" autocomplete="name" tabindex="1" required />
                                </div>
                                <div class="form-group {{ isset($errors) && $errors->has('email') ? 'has-error' : '' }}">
                                    <input class="form-control" name="email" placeholder="Your email address *" type="email" value="{{ old('email') }}" autocomplete="email" tabindex="3" required />
                                </div>
                            </div>
                            <div class="is-pulled-right">
                                <div class="form-group {{ isset($errors) && $errors->has('company') ? 'has-error' : '' }}">
                                    <input class="form-control" name="company" placeholder="Company name or website" type="text" value="{{ old('company') }}" autocomplete="organization" tabindex="2" />
                                </div>
                                <div class="form-group {{ isset($errors) && $errors->has('phone') ? 'has-error' : '' }}">
                                    <input class="form-control" name="phone" placeholder="Your phone number" type="text" value="{{ old('phone') }}" autocomplete="tel" tabindex="4" />
                                </div>
                            </div>
                            <div class="form-group {{ isset($errors) && $errors->has('message') ? 'has-error' : '' }}">
                                <textarea class="form-control" name="message" placeholder="Message *" rows="5" tabindex="5" required>{{ old('message') }}</textarea>
                            </div>
                            {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                            <button class="btn is-large is-pearl" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="is-hidden-mobile">
        <div class="slides-separator">
            <img src="{{ asset('img/team-15.jpg') }}" alt="Further team" />
            <img src="{{ asset('img/team-7.jpg') }}" alt="Further team" />
            <img src="{{ asset('img/team-1.jpg') }}" alt="Further team" />
        </div>
    </section>

    @include(getLang() . '.banners.contact-info')
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
                    "@id": "{{ localizedRoute('contact') }}",
                    "name": "Contact Us"
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
    "description": "New projects, partnerships or proposals; there is plenty to talk about. We are based in Budapest, Hungary but work with clients all across Europe and beyond.",
    "headline": "Discuss your idea, project or partnership",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Digital product development, MVP development, Custom software development, Software development, Web development, UX research, UX design, UI design, Digital transformation",
    "mainEntityOfPage": "{{ localizedRoute('contact') }}",
    "name": "Discuss your idea, project or partnership",
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
                "@id": "{{ localizedRoute('contact') }}",
                "name": "Contact Us"
            }
        }
    ]
}
</script>
@endpush