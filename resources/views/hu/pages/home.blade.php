@extends('hu.site', ['bodyClass' => 'has-hero'])

@section('content')
    <section class="hero is-cobalt">
        <h2 class="hero-heading">
            Adat. Rendszer.<br />
            Automatizálás.<br />
            <strong class="is-tangerine">Szoftver.</strong>
        </h2>
        <a class="hero__cta" href="{{ localizedRoute('contact') }}">
            Van egy ötleted, amit meg szeretnél velünk beszélni?<strong>Írd meg nekünk</strong>
        </a>
        <a class="hero__scroll" href="#partners"></a>
    </section>

    <section class="section is-dark has-padding-b30" id="partners">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-9-desktop">
                    <h2 class="hero-heading">
                        Nehezen találsz <strong class="is-raspberry">megbízható</strong> fejlesztő partnert?
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-5-tablet">
                    <p class="has-margin-b30">
                        Egy olyan szoftverfejlesztő céget keresel aki nem csak egyszerű beszállítód, hanem egyben partnered is? Aki túlteljesíti a projektleírásban szereplő igényeket? Akkor jó helyen jársz!
                    </p>
                    <p>
                        A Further egy fejlesztőkből, rendszertervezőkből, designerekből és üzleti elemzőkből álló csapat. Büszkék vagyunk, hogy az ügyfeleink átlagban {{ config('site.stats.avg_years') }} éve kitartanak mellettünk. Ez úgy gondoljuk jól tükrözi a szolgáltatásaink minőségét és a hosszútávú partnerségek iránti elhivatottságunkat.
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
                        Ötleteid <strong class="is-pearl">működő</strong> digitális termékké alakítjuk.
                    </h2>
                </div>
                <div class="column is-offset-1-widescreen">
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/home-services-digital-transformation-icon.png') }}" alt="Digitális transzformáció" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Digitális<br />transzformáció</h3>
                            <p>
                                A digitalizáció minden iparra hatással lesz. Megmutatjuk, hogyan segítheti a digitalizáció a Te vállalkozásodat és hogyan használhatod ki az ezzel járó lehetőségeket.
                            </p>
                            <a class="btn is-pearl" href="{{ localizedRoute('services.digital-transformation') }}">Tovább</a>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/home-services-custom-development-icon.png') }}" alt="Egyedi szoftverfejlesztés" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Egyedi<br />szoftverfejlesztés</h3>
                            <p>
                                Minden egyedi fejlesztési igényednek eleget tudunk tenni a követelmények megfogalmazásától a tervezésig és a megvalósításig.
                            </p>
                            <a class="btn is-pearl" href="{{ localizedRoute('services.custom-development') }}">Tovább</a>
                        </div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/home-services-mvp-development-icon.png') }}" alt="MVP fejlesztés" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">MVP<br />fejlesztés</h3>
                            <p>
                                Agilis technikákat és tervezői gondolkodásmódot használva rövid időn belül működő megoldásokat szállítunk, amelyek lehetővé teszik számodra, hogy hamar mérhető eredményeket lássál.
                            </p>
                            <a class="btn is-pearl" href="{{ localizedRoute('services.mvp-development') }}">Tovább</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.projects')

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-9-desktop">
                    <h2 class="hero-heading">
                        Further <strong class="is-raspberry">❤</strong> Laravel + Vue.js.
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet">
                    <p>Imádjuk az olyan keretrendszereket mint a Laravel és a Vue.js. A gazdag funkcionalitásuknak köszönhetően lehetőve teszik számunkra, hogy csökkentsük a fejlesztési időket és költségeket. Komoly tudással és tapasztalattal rendelkezünk ezeknek az eszközöknek a használatában, ami segít a letisztult, karbantartható és skálázható kód írásában.</p>
                    <p>A Laravel a legnépszerűbb PHP keretrendszer, de a Vue.js is egyre kedveltebb a Javascript fejlesztők körében. Mindkettő hátterében egy fantasztikus közösség áll, amit mi is próbálunk támogatni, hozzájárulva a kódbázis fejlesztéséhez és közösségi projektekhez.</p>
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
            <div class="heading-3">A Further a Laravel Hungary meetup szervezője!</div>
        </div>
    </section>

    <section class="section">
        <div class="contact__homepage">
            <div class="container">
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-6-widescreen">
                        <h2 class="hero-heading">
                            Építsünk valamit <strong class="is-tangerine">együtt!</strong>
                        </h2>

                        <p class="has-margin-b30">
                            Nyitottak vagyunk minden új kérdésre, megkeresésre. Ha felkeltettük érdeklődésed, megtetszett a munkánk vagy van olyan projekted, amelyet meg szeretnél velünk beszélni, akkor vedd fel velünk a kapcsolatot telefonon vagy e-mailben.
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
                                <input class="form-control" name="name" placeholder="Neved*" type="text" value="{{ old('name') }}" autocomplete="name" tabindex="1" required />
                            </div>
                            <div class="form-group {{ isset($errors) && $errors->has('company') ? 'has-error' : '' }}">
                                <input class="form-control" name="company" placeholder="Céged neve vagy weboldala" type="text" value="{{ old('company') }}" autocomplete="organization" tabindex="2" />
                            </div>
                            <div class="is-pulled-left">
                                <div class="form-group {{ isset($errors) && $errors->has('email') ? 'has-error' : '' }}">
                                    <input class="form-control" name="email" placeholder="E-mail címed*" type="email" value="{{ old('email') }}" autocomplete="email" tabindex="3" required />
                                </div>
                            </div>
                            <div class="is-pulled-right">
                                <div class="form-group {{ isset($errors) && $errors->has('phone') ? 'has-error' : '' }}">
                                    <input class="form-control" name="phone" placeholder="Telefonszámod" type="text" value="{{ old('phone') }}" autocomplete="tel" tabindex="4" />
                                </div>
                            </div>
                            <div class="form-group {{ isset($errors) && $errors->has('message') ? 'has-error' : '' }}">
                                <textarea class="form-control" name="message" placeholder="Üzenet*" rows="5" tabindex="5" required>{{ old('message') }}</textarea>
                            </div>
                            {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                            <button class="btn is-large is-pearl" type="submit">Küldés</button>
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
    "description": "{{ config('site.description.' . getLang()) }}",
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
    "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
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
        "description": "{{ config('site.description.' . getLang()) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
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
                    "name": "Főoldal"
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
        "description": "{{ config('site.description.' . getLang()) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    },
    "description": "{{ config('site.description.' . getLang()) }}",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . getLang()) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, MVP fejlesztés, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('home') }}",
    "name": "{{ config('site.name') }} | {{ config('site.title.' . getLang()) }}",
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
        "description": "{{ config('site.description.' . getLang()) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    },
    "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
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
        "description": "{{ config('site.description.' . getLang()) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
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
        "description": "{{ config('site.description.' . getLang()) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "https://gofurther.digital"
    },
    "creator": {
        "@type": "Organization",
        "alternateName": "{{ config('site.company.name') }}",
        "name": "Further Digital Solutions"
    },
    "description": "{{ config('site.description.' . getLang()) }}",
    "image": "{{ asset('img/logo.svg') }}",
    "name": "Further Digital Solutions",
    "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
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
                "name": "Főoldal"
            }
        }
    ]
}
</script>
@endpush
