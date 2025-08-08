@extends('hu.site')

@section('title', 'Webfejlesztési szolgáltatások')
@section('description', 'Segítünk olyan összetett weboldalakat építeni, amelyek érthetőek és hatékonyak: UX-központú tervezés, strukturált tartalom, gördülékeny felhasználói utak és problémamentes háttérrendszer.')


@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        Webfejlesztés
                    </h5>
                    <h1 class="heading-1 has-margin-b5">
                        <strong class="is-raspberry">Okosabb weboldalak</strong><br />modern csapatoknak.
                    </h1>
                    <div>
                        Segítünk olyan összetett weboldalakat építeni, amelyek érthetőek és hatékonyak: UX-központú tervezés, strukturált tartalom, gördülékeny felhasználói utak és problémamentes háttérrendszer.
                    </div>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <div class="services__service__benefits is-raspberry">
                        <div class="services__service__benefits__badge">Miért választanak minket</div>
                        <ul class="services__service__benefits__list has-margin-b30">
                            <li>UX-központú megközelítés a struktúrához és navigációhoz</li>
                            <li>Skálázhatóságra, sebességre és akadálymentességre építve</li>
                            <li>Többnyelvű támogatás és lokalizált tartalom</li>
                            <li>CMS a te csapatod munkafolyamataihoz igazítva</li>
                            <li>Külső rendszerek integrációja (CRM, ERP, marketing eszközök stb.)</li>
                        </ul>
                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large" href="#schedule">
                                Foglalj ingyenes konzultációt
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b60 has-text-centered">
                        Így néz ki a <strong class="is-pearl">fejlesztési</strong> folyamatunk
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet is-6-desktop is-offset-1-desktop">
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">1</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Feltérképezés
                            </h3>
                            <p>Workshopokkal kezdünk, hogy megismerjük a célközönségedet, üzleti céljaidat és technikai igényeidet.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">2</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Tervezés
                            </h3>
                            <p>Megtervezzük az információs struktúrát, tartalomtípusokat, felhasználói utakat és belső szerepköröket.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">3</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                UX/UI Design
                            </h3>
                            <p>Minden UX komponens megtervezése során figyelembe vesszük az üzleti célokat, és gyakran design systemet is implementálunk vagy integrálunk, hogy a felület egységes maradjon csapaton, platformon és jövőbeli funkciókon át.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">4</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Fejlesztés
                            </h3>
                            <p>Skálázható, reszponzív és a rendszeredbe illeszkedő megoldásokat építünk. Nem trendeket hajszolunk, hanem az üzleti céljaidhoz illeszkedő technológiát választunk a teljesítmény, rugalmasság és fenntarthatóság érdekében.</p>
                        </div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">5</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Átadás
                            </h3>
                            <p>Dokumentált, optimalizált és támogatott rendszer – készen arra, hogy a csapatod birtokba vegye és továbbfejlessze.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-12.jpg') }}" alt="Further csapat" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-3.jpg') }}" alt="Further csapat" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-6.jpg') }}" alt="Further csapat" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-1.jpg') }}" alt="Further csapat" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-raspberry">Sikertörténetek</strong> ügyfeleinktől:
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <div class="has-items-centered">
                        <img class="testimonial__picture has-margin-r15" src="{{ asset('img/testimonials-christian-hummelgaard.png') }}" alt="OnRobot Christian Kuntz Hummelgaard testimonial" />
                        <blockquote class="testimonial__content">
                            <p>A weboldal egy héttel ezelőtti indulása óta 70 - 100%-os növekedést tapasztaltunk az érdeklődők számában. (...) És még csak július közepe van! Ilyen megugrásra ilyenkor nem is számítottunk. Ez egy hihetetlen lezárása egy webfejlesztési projektnek.</p>
                            <cite class="testimonial__author">HUMMELGAARD Christian, OnRobot</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b60 has-text-centered">Mire számíthatsz?</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-pearl is-small"></div>
                    <h3 class="heading-4">UX terv</h3>
                    <p>Átlátható navigáció és struktúra, amely támogatja az összetett felhasználói útvonalakat és a tartalomközpontú működést.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-small is-tangerine"></div>
                    <h3 class="heading-4">Rugalmas CMS beállítás</h3>
                    <p>Az adminisztrátorok és marketingesek testreszabott felületet kapnak jogosultságokkal, szerepkörökkel és többnyelvű támogatással.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-raspberry is-small"></div>
                    <h3 class="heading-4">Teljesítményre optimalizált kód</h3>
                    <p>Reszponzív, akadálymentes, SEO-barát kód, amely gyorsan betöltődik és együtt növekszik az üzleted igényeivel.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-cobalt is-small"></div>
                    <h3 class="heading-4">Külső rendszerek integrációja</h3>
                    <p>Weboldalad összekötjük CRM-ekkel, marketingeszközökkel és belső rendszereiddel, megbízhatóan és zökkenőmentesen.</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <a class="btn has-margin-t15 is-large is-pearl" href="#schedule">
                    Beszéljünk a weboldaladról?
                </a>
            </div>
        </div>
    </section>

    <section class="section has-padding-b30">
        <div class="container">
            <div class="columns has-margin-b30">
                <div class="column">
                    <h2 class="hero-heading has-text-centered">
                        Real case studies. Real <strong class="is-raspberry">results.</strong>
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <a class="project-list__featured project-list__featured--onrobot-website-redesign"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'onrobot-website-redesign']) }}"
                    >
                        <div class="project-list__featured__content">
                            <h1 class="project-list__featured__title">OnRobot weboldal</h1>
                            <h2 class="project-list__featured__subtitle">70%-os érdeklődőszám-növekedés egy ipari automatizálással foglalkozó cégnél</h2>
                            <div class="project-list__featured__description">
                                Ahogy az OnRobot marketing- és értékesítési céljai egyre ambiciózusabbá váltak, szükségük lett egy olyan weboldalra, amely képes lépést tartani velük — és lehetővé teszi számukra, hogy külső fejlesztők bevonása nélkül, önállóan hozzanak létre moduláris landing oldalakat, indítsanak kampányokat és futtassanak A/B teszteket.
                            </div>
                            <span class="btn is-black">Olvasd el az esettanulmányt</span>
                        </div>

                        <img class="project-list__featured__image" src="{{ asset('media/projects/onrobot-project-list.png?v2') }}" alt="OnRobot - 70% lead increase for industrial automation company" width="588" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h3 class="heading-2">Gy.I.K.</h3>

                    <h4 class="heading-3">Mennyi ideig tart egy webfejlesztési projekt?</h4>
                    <p class="has-margin-b30"><small>Az időtartam általában 8–20 hét között mozog, a projekt összetettségétől, a nyelvek számától és az integrációs igényektől függően.</small></p>

                    <h4 class="heading-3">Tudtok együtt dolgozni a belső design csapatunkkal vagy külső beszállítókkal?</h4>
                    <p class="has-margin-b30"><small>Természetesen. Gyakran dolgozunk együtt belső designerekkel, marketingesekkel és IT csapatokkal.</small></p>

                    <h4 class="heading-3">Mi magunk tudjuk majd kezelni a tartalmat?</h4>
                    <p class="has-margin-b30"><small>Igen. A CMS-t úgy állítjuk be, hogy a csapatod a megfelelő szerepkörök, struktúra és dokumentáció segítségével magabiztosan kezelhesse a tartalmat.</small></p>

                    <h4 class="heading-3">Át tudjátok költöztetni a meglévő weboldalunk tartalmát?</h4>
                    <p class="has-margin-b30"><small>Igen. Vállaljuk a tartalom migrálását WordPress, Drupal vagy egyedi rendszerek esetén is, és gondoskodunk az adat integritásról és SEO-megfelésről.</small></p>

                    <h4 class="heading-3">Biztosítotok tárhelyet és támogatást is?</h4>
                    <p class="has-margin-b30"><small>Igen, megbízható tárhelyet kínálunk automatikus biztonsági mentésekkel és folyamatos monitorozással. A folyamatos támogatás és karbantartás havi csomagként is elérhető.</small></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="schedule">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b15 has-text-centered">
                        <strong class="is-raspberry">Foglalj</strong> egy ingyenes konzultációt!
                    </h2>
                    <h4 class="heading-5 has-text-centered">
                        Beszéljünk róla, hogyan lehet több a weboldalad, mint egy online névjegykártya!
                    </h4>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <!-- Calendly inline widget begin -->
                    <div class="calendly-inline-widget" data-url="https://calendly.com/peterilles/further-discovery-call?hide_gdpr_banner=1" style="min-width:320px;height:700px;"></div>
                    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                    <!-- Calendly inline widget end -->
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
                    "@id": "{{ config('app.url') }}",
                    "name": "Főoldal"
                }
            },
            {
                "@type": "ListItem",
                "position": "2",
                "item": {
                    "@id": "{{ localizedRoute('services') }}",
                    "name": "Szolgáltatások"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ config('app.url') }}/hu/szolgaltatasok/webfejlesztes",
                    "name": "Webfejlesztési szolgáltatások"
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
    "description": "Segítünk olyan összetett weboldalakat építeni, amelyek érthetőek és hatékonyak: UX-központú tervezés, strukturált tartalom, gördülékeny felhasználói utak és problémamentes háttérrendszer.",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, Digitális termékfejlesztés, Statamic, Laravel, Webflow, Framer",
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
                "name": "Főoldal"
            }
        },
        {
            "@type": "ListItem",
            "position": "2",
            "item": {
                "@id": "{{ localizedRoute('services') }}",
                "name": "Szolgáltatások"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ config('app.url') }}/hu/szolgaltatasok/webfejlesztes",
                "name": "Webfejlesztési szolgáltatások"
            }
        }
    ]
}
</script>
@endpush