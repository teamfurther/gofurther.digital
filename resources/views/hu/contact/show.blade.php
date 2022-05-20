@extends('hu.site')

@section('title', 'Kapcsolat')
@section('description', 'Ötlet, új projekt vagy partnerség; sokmindenről beszélhetünk. Személyesen Budapesten és Romániában találod meg csapattagjainkat, de ügyfeleink szerte Európában és azon túl is megtalálhatóak.')

@section('content')
    <section class="section">
        <div class="contact">
            <div class="container">
                <div class="columns">
                    <div class="column is-8-desktop is-offset-2-desktop">
                        <h2 class="hero-heading">
                            Építsünk valamit <strong class="is-tangerine">együtt!</strong>
                        </h2>

                        <p class="has-text-centered">
                            Nyitottak vagyunk minden új kérdésre, megkeresésre. Ha felkeltettük érdeklődésed, megtetszett a munkánk vagy van olyan projekted, amelyet meg szeretnél velünk beszélni, akkor vedd fel velünk a kapcsolatot telefonon vagy e-mailben.
                        </p>

                        <form class="contact__form" id="contact-form" action="{{ localizedRoute('contact.send') }}" method="POST">
                            {{ csrf_field() }}

                            <div class="is-pulled-left">
                                <div class="form-group {{ isset($errors) && $errors->has('name') ? 'has-error' : '' }}">
                                    <input class="form-control" name="name" placeholder="Neved *" type="text" value="{{ old('name') }}" autocomplete="name" tabindex="1" required />
                                </div>
                                <div class="form-group {{ isset($errors) && $errors->has('email') ? 'has-error' : '' }}">
                                    <input class="form-control" name="email" placeholder="E-mail címed *" type="email" value="{{ old('email') }}" autocomplete="email" tabindex="3" required />
                                </div>
                            </div>
                            <div class="is-pulled-right">
                                <div class="form-group {{ isset($errors) && $errors->has('company') ? 'has-error' : '' }}">
                                    <input class="form-control" name="company" placeholder="Céged neve vagy weboldala" type="text" value="{{ old('company') }}" autocomplete="organization" tabindex="2" />
                                </div>
                                <div class="form-group {{ isset($errors) && $errors->has('phone') ? 'has-error' : '' }}">
                                    <input class="form-control" name="phone" placeholder="Telefonszámod" type="text" value="{{ old('phone') }}" autocomplete="tel" tabindex="4" />
                                </div>
                            </div>
                            <div class="form-group {{ isset($errors) && $errors->has('message') ? 'has-error' : '' }}">
                                <textarea class="form-control" name="message" placeholder="Üzenet *" rows="5" tabindex="5" required>{{ old('message') }}</textarea>
                            </div>
                            {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                            <button class="btn is-large is-pearl" type="submit">Küldés</button>
                        </form>
                    </div>
                </div>
            </div>
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
                    "name": "Kapcsolat"
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
    "description": "Ötlet, új projekt vagy partnerség; sokmindenről beszélhetünk. Személyesen Budapesten és Romániában találod meg csapattagjainkat, de ügyfeleink szerte Európában és azon túl is megtalálhatóak.",
    "headline": "Kapcsolat",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Digitális termékfejlesztés, MVP fejlesztés, Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, UX kutatás, UX design, UI design, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('contact') }}",
    "name": "Kapcsolat",
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
                "name": "Kapcsolat"
            }
        }
    ]
}
</script>
@endpush