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

                        <p class="has-text-centered">Nyitottak vagyunk minden új kérdésre, felkérésre. Ha felkeltettük érdeklődésed, megtetszett a munkánk vagy van olyan projekted, amelyet meg szeretnél velünk beszélni, akkor vedd fel velünk a kapcsolatot telefonon vagy e-mailben.</p>

                        <form class="contact__form" id="contact-form" action="{{ localizedRoute('contact.send') }}" method="POST">
                            {{ csrf_field() }}

                            <div class="is-pulled-left">
                                <div class="form-group {{ isset($errors) && $errors->has('contact_name') ? 'has-error' : '' }}">
                                    <input class="form-control" name="contact_name" placeholder="Neved*" type="text" value="{{ old('contact_name') }}" autocomplete="name" tabindex="1" required />
                                </div>
                                <div class="form-group {{ isset($errors) && $errors->has('contact_phone') ? 'has-error' : '' }}">
                                    <input class="form-control" name="contact_phone" placeholder="Telefon" type="text" value="{{ old('contact_phone') }}" autocomplete="tel" tabindex="3" />
                                </div>
                            </div>
                            <div class="is-pulled-right">
                                <div class="form-group {{ isset($errors) && $errors->has('contact_company') ? 'has-error' : '' }}">
                                    <input class="form-control" name="contact_company" placeholder="Céged neve" type="text" value="{{ old('contact_company') }}" autocomplete="organization" tabindex="2" />
                                </div>
                                <div class="form-group {{ isset($errors) && $errors->has('contact_email') ? 'has-error' : '' }}">
                                    <input class="form-control" name="contact_email" placeholder="E-mail*" type="email" value="{{ old('contact_email') }}" autocomplete="email" tabindex="4" required />
                                </div>
                            </div>
                            <div class="form-group {{ isset($errors) && $errors->has('contact_message') ? 'has-error' : '' }}">
                                <textarea class="form-control" name="contact_message" placeholder="Üzenet*" rows="5" tabindex="5" required>{{ old('contact_message') }}</textarea>
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
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, MVP fejlesztés, Digitális transzformáció",
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