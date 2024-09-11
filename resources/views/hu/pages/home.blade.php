@extends('hu.site', ['bodyClass' => 'has-hero'])

@section('content')
    <section class="hero hero--background-1 is-cobalt">
        <h2 class="hero-heading">
            A Te ötleted.<br />Megtervezzük. Megépítjük.<br />
            <strong class="is-tangerine">Hódítsd meg a világot.</strong>
        </h2>

        <a class="hero__cta" href="{{ localizedRoute('contact') }}">
            Van egy ötleted, amit meg szeretnél velünk beszélni?<strong>Írd meg nekünk</strong>
        </a>

        <a class="hero__scroll" href="#services"></a>
    </section>

    <section class="section has-padding-b30" id="services">
        <div class="container">
            <div class="columns">
                <div class="column is-6-tablet">
                    <h2 class="hero-heading">
                        Ötleteid <strong class="is-pearl">működő</strong><br />digitális termékké alakítjuk.
                    </h2>

                    <p class="has-margin-b30">Digitális termékfejlesztő ügynökségként abban rejlik értékünk, hogy egy sikeres termékhez szükséges összes hozzávaló egy helyen érthető el. Összehozzuk az üzletet, a felhasználói élményt és a technológiát, hogy végigkalauzoljunk a teljes termékfejlesztési folyamaton. Ötlettől megvalósításig és azon is túl.</p>

                    <ul class="list has-bullets">
                        <li><a class="is-grey" href="{{ localizedRoute('services') }}#strategia-es-kutatas">Stratégia és kutatás</a></li>
                        <li><a class="is-grey" href="{{ localizedRoute('services') }}#ux-kutatas-es-tervezes">UX kutatás és tervezés</a></li>
                        <li><a class="is-grey" href="{{ localizedRoute('services') }}#digitalis-termekfejlesztes">Digitális termékfejlesztés</a></li>
                    </ul>
                </div>
                <div class="column is-offset-1-tablet">
                    <div class="services__static">
                        <a href="{{ localizedRoute('services') }}#strategia-es-kutatas" class="services__static--strategy-and-research">
                            <span>Stratégia<br />és kutatás</span>
                        </a>
                        <a href="{{ localizedRoute('services') }}#ux-kutatas-es-tervezes" class="services__static--ux-research-and-design">
                            <span>UX kutatás<br />és tervezés</span>
                        </a>
                        <a href="{{ localizedRoute('services') }}#digitalis-termekfejlesztes" class="services__static--digital-product-development">
                            <span>Digitális<br />termékfejlesztés</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark has-padding-b30" id="projects">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="hero-heading has-text-centered">
                        Ők már <strong class="is-tangerine">minket választottak</strong>.
                    </h2>

                    <div class="columns is-mobile is-multiline has-text-centered">
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/png.png') }}" alt="Procter & Gamble" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/msd.png') }}" alt="MSD Pharma" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/samsung-engineering.png') }}" alt="Samsung Engineering" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/njoy.png') }}" alt="nJoy" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/praktiker.png') }}" alt="Praktiker Hungary" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/corvinus.png') }}" alt="Corvinus University of Budapest" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/harborsz.png') }}" alt="Harborsz Logistic" />
                        </div>
                        <div class="column is-6-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/onrobot.png') }}" alt="OnRobot" />
                        </div>
                        <div class="column is-hidden-mobile is-4-tablet has-margin-b60">
                            <img src="{{ asset('media/partners/steiger.png') }}" alt="Steiger" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <a class="project-list__featured project-list__featured--njoy-the-hive"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'njoy-the-hive']) }}"
                    >
                        <div class="project-list__featured__content">
                            <h1 class="project-list__featured__title">nJoy - The Hive ERP</h1>
                            <div class="project-list__featured__description">
                                Az nJoy, egy fogyasztói elektronikus eszközöket gyártó brand, rövid idő alatt felülmúlta a meglévő szoftverinfrastruktúráját és egyedi integrált megoldásra volt szüksége. Minket bíztak meg, hogy olyan termékéletciklus-kezelő eszközt fejlesszünk, amely megfelel sajátos igényeiknek.
                            </div>
                            <span class="btn is-white">Olvasd el az esettanulmány</span>
                        </div>

                        <img class="project-list__featured__image" src="{{ asset('media/projects/njoy-project-list.png') }}" alt="nJoy - The Hive ERP system - Rapid Product Development" />
                    </a>
                    <a class="project-list__featured project-list__featured--kompozit is-reversed"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'kompozit-field-service-management-app']) }}"
                    >
                        <div class="project-list__featured__content">
                            <h1 class="project-list__featured__title">Kompozit Field Service Management</h1>
                            <div class="project-list__featured__description">
                                A Kompozit egy helyszíni munkavégzést támogató megoldás amely segít a szervíz és karbantartási munkák hatékony dokumentálásában.
                            </div>
                            <span class="btn is-tangerine">Olvasd el az esettanulmány</span>
                        </div>

                        <img class="project-list__featured__image" src="{{ asset('media/projects/kompozit-project-list.png') }}" alt="Kompozit Field Service Management" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.projects')

    <section class="section" id="our-approach">
        <div class="container">
            <div class="columns">
                <div class="column is-8">
                    <h2 class="hero-heading">
                        Mire <strong class="is-raspberry">számíthatsz?</strong>
                    </h2>

                    <p>Egy kollaboratív folyamatra. Egy hagyományos ügynökséggel ellentétben, ha minket választasz, akkor már elejétől fogva és a projekt során mindvégig be leszel vonva a folyamatba. Ezt találjuk a legbiztosabb módszernek, hogy olyan terméket építsünk ami te szeretni fogsz, a felhasználóid pedig szeretettel használnak majd.</p>
                    <p class="has-margin-b60">Agilis technikákat és tervezői gondolkodásmódot használva rövid időn belül működő megoldásokat szállítunk, melyek lehetővé teszik számodra, hogy hamar mérhető eredményeket lássál.</p>

                    <div class="slides">
                        <img src="{{ asset('img/team-1.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-2.jpg') }}" alt="Further team" />
                    </div>
                </div>
                <div class="column is-hidden-mobile is-offset-1-desktop">
                    <img src="{{ asset('img/process-hu.svg') }}" alt="Mire számíthatsz?" />
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-form')
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
    "inLanguage": "hu_hu",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, Digitális termékfejlesztés, MVP fejlesztés, Digitális transzformáció",
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
