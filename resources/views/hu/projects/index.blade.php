@extends('hu.site')

@section('title', 'Projektjeink')
@section('description', 'Projektjeink meghatároznak minket. Büszkék vagyunk munkáinkra és párat megosztottuk közűlük esettanulmányok formájában. Ha Te is úgy lelkesedsz projektjeinkért mint mi, lépjen velünk kapcsolatba és még többet megosztunk Veled!')

@section('content')
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h2 class="hero-heading">
                        Minden <strong class="is-pearl">sikeres projekt</strong> mögött van egy történet&hellip;
                    </h2>
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
                            <span class="btn is-white">Olvasd el az esettanulmányt</span>
                        </div>

                        <img class="project-list__featured__image" src="{{ asset('media/projects/njoy-project-list.png') }}" alt="nJoy - The Hive ERP - Termékfejlesztés felturbózva" />
                    </a>
                    <a class="project-list__featured project-list__featured--steiger-erp is-reversed"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'steiger-erp']) }}"
                    >
                        <div class="project-list__featured__content">
                            <h1 class="project-list__featured__title">Steiger ERP</h1>
                            <div class="project-list__featured__description">
                                Alapjában véve a Steiger egy családi vállalkozás, amely több generáción át részt vett a fémfeldolgozó iparban. A Steiger képviselői felvették velünk a kapcsolatot, hogy egy olyan rendszert dolgozzunk ki, amely automatizálja munkafolyamataikat és javítja ezek megbízhatóságát.
                            </div>
                            <span class="btn is-pearl">Olvasd el az esettanulmányt</span>
                        </div>

                        <img class="project-list__featured__image" src="{{ asset('media/projects/steiger-project-list.png') }}" alt="Steiger ERP - Ajánlatkészítéstől gyártásig" />
                    </a>
                </div>
            </div>
            <div class="columns is-mobile is-multiline">
                <div class="column is-flex is-12-mobile is-6-tablet is-4-desktop">
                    <a class="project-list__item"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'centralized']) }}"
                    >
                        <img class="project-list__item__image" src="{{ asset('media/projects/centralized-project-list.jpg') }}" alt="Centralized.me - Artist Management From A to Z" />

                        <h1 class="project-list__item__title">Centralized.me Artist Management Platform</h1>
                        <div class="project-list__item__description">
                            A centralized.me a világ első művészmenedzsment applikációja, önszervezett zenészek és modern menedzserek számára. Tartalmaz minden olyan videó anyagot, útmutatót, munkafüzetet, költségvetést, email- és szerződésmintát, amire egy
                            zenésznek szüksége lehet.
                        </div>
                    </a>
                </div>
                <div class="column is-flex is-12-mobile is-6-tablet is-4-desktop">
                    <a class="project-list__item"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'harborsz-logistic']) }}"
                    >
                        <img class="project-list__item__image" src="{{ asset('media/projects/harborsz-project-list.jpg') }}" alt="Harborsz Logistic - Integrált ügyvitel" />

                        <h1 class="project-list__item__title">Harborsz Logistic</h1>
                        <div class="project-list__item__description">
                            A Harborsz Logistic fő tevékenysége a teherszállítás megszervezése kompon, hidakon és alagutakon át. Együttdolgozva, egy olyan rendszert fejlesztettünk, amely lefedi a tevékenységük összes területét.
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section has-padding-b30">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        Ők már <strong class="is-raspberry">minket választottak:</strong>
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
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

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="testimonial__picture" src="{{ asset('img/testimonials-adorian-demeter.png') }}" alt="nJoy - The Hive Adorian Demeter testimonial" />
                    <blockquote class="testimonial__content">
                        <p>
                            Nem tudnám elképzelni, hogyan működne a termékfejlesztésünk a Hive nélkül. Bevezetése óta az új termékek fejlesztésének ideje 20%-al csökkent, minden adatunk rendszerezett és könnyen utánkövethető.
                        </p>
                        <cite class="testimonial__author">DEMETER Adorian, nJoy</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact', [
        'buttonText' => 'Építsük meg együtt',
        'headingText' => 'Kiváncsiak vagyunk az ötletedre!'
    ])
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
            },
            {
                "@type": "ListItem",
                "position": "2",
                "item": {
                    "@id": "{{ localizedRoute('projects') }}",
                    "name": "Projektjeink"
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
    "description": "Projektjeink meghatároznak minket. Büszkék vagyunk munkáinkra és párat megosztottuk közűlük esettanulmányok formájában. Ha Te is úgy lelkesedsz projektjeinkért mint mi, lépjen velünk kapcsolatba és még többet megosztunk Veled!",
    "headline": "Projektjeink",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, Digitális termékfejlesztés, MVP fejlesztés, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('projects') }}",
    "name": "Projektjeink",
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
                "name": "Főoldal"
            }
        },
        {
            "@type": "ListItem",
            "position": "2",
            "item": {
                "@id": "{{ localizedRoute('projects') }}",
                "name": "Projektjeink"
            }
        }
    ]
}
</script>
@endpush
