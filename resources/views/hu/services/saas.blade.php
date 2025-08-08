@extends('hu.site')

@section('title', 'SaaS termék fejlesztési szolgáltatások')
@section('description', 'B2B SaaS termékeket, piactereket és válogatott B2C megoldásokat építünk. A UX és technológiai kivitelezés mellett stratégiai iránymutatást is adunk. Több éves tapasztalatból, valódi sikerek és hibák alapján.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        SaaS termék fejlesztés
                    </h5>
                    <h1 class="heading-1 has-margin-b5">
                        Ötleteid <strong class="is-raspberry">működő</strong> digitális termékké alakítjuk.
                    </h1>
                    <div>
                        B2B SaaS termékeket, piactereket és válogatott B2C megoldásokat építünk. A UX és technológiai kivitelezés mellett stratégiai iránymutatást is adunk. Több éves tapasztalatból, valódi sikerek és hibák alapján.
                    </div>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <div class="services__service__benefits is-raspberry">
                        <div class="services__service__benefits__badge">Előnyök</div>
                        <ul class="services__service__benefits__list has-margin-b30">
                            <li>Termékszemlélet: UX, technológia és üzlet összehangolva</li>
                            <li>Társalapítóként gondolkodunk, nem csak kivitelezők vagyunk</li>
                            <li>Több mint {{ config('site.stats.projects') }} projekt tapasztalata áll mögöttünk</li>
                            <li>AI / ML képességek, ha valódi értéket teremtenek</li>
                            <li>Indítás utáni támogatás, optimalizálás és terméktanácsadás</li>
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
                        Hogyan zajlik a <strong class="is-pearl">SaaS fejlesztés</strong> nálunk?
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
                            <h3 class="heading-4">Feltérképezés</h3>
                            <p>Összehangoljuk a víziót, az üzleti modellt, a célcsoportokat és a siker mérőszámait. Segítünk eldönteni, mit érdemes megépíteni és mit nem.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">2</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">Tervezés</h3>
                            <p>Felhasználói folyamatokat és prototípusokat alkotunk, hogy időben tesztelhessünk, visszajelzéseket kérhess, vagy épp meggyőzd a befektetőidet.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">3</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">UX/UI design</h3>
                            <p>Felhasználóbarát, reszponzív és márkához illeszkedő felületeket tervezünk minden eszközre és platformra optimalizálva.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">4</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">Fejlesztés</h3>
                            <p>Tiszta kódot írunk, automatizálunk, és integráljuk a szükséges CRM rendszereket, analitikát, AI-t vagy külső API-kat.</p>
                        </div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">5</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">Átadás</h3>
                            <p>Végigkísérünk az élesítésen, bevezetésen és a további iterációkon is. Nem tűnünk el indulás után, hanem hosszú távon is számíthatsz ránk.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-9.jpg') }}" alt="Further team" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-7.jpg') }}" alt="Further team" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-3.jpg') }}" alt="Further team" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-1.jpg') }}" alt="Further team" />
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
                        <img class="testimonial__picture has-margin-r15" src="{{ asset('img/testimonials-brian-dubb.png') }}" alt="Centralized Brian Dubb testimonial" />
                        <blockquote class="testimonial__content">
                            <p>A Further határidőn és költségvetésen belül fejlesztette le az MVP-t, ami sikeres béta teszteléshez, majd egy második kör befektetéshez vezetett. Örvendünk hogy az applikáció második verzióján is a Furtherrel együtt dolgozhatunk.</p>
                            <cite class="testimonial__author">DUBB Brian, Centralized</cite>
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
                    <h2 class="heading-1 has-margin-b60 has-text-centered">Milyen típusú SaaS termékeket készítünk?</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-pearl is-small"></div>
                    <h3 class="heading-4">B2B SaaS platformok</h3>
                    <p>A fő profilunk: összetett üzleti folyamatokat kiszolgáló termékek mély integrációkkal és valódi üzleti logikával.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-small is-tangerine"></div>
                    <h3 class="heading-4">Piacterek</h3>
                    <p>Többszereplős platformokat építünk, ahol fontos az onboarding, fizetés, értékelés és moderálás is.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-raspberry is-small"></div>
                    <h3 class="heading-4">Válogatott B2C alkalmazások</h3>
                    <p>Bár főként B2B-ben utazunk, vállalunk fókuszált B2C projekteket is, ahol kulcsfontosságú a UX és az összetett felhasználói utak.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-cobalt is-small"></div>
                    <h3 class="heading-4">AI-alapú SaaS</h3>
                    <p>Ha valódi értéket teremt, integrálunk gépi tanulást, nyelvi modelleket, képfeldolgozást vagy AI-alapú automatizmusokat.</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <a class="btn has-margin-t15 is-large is-pearl" href="#schedule">
                    Beszéljünk a SaaS ötletedről!
                </a>
            </div>
        </div>
    </section>

    <section class="section has-padding-b30">
        <div class="container">
            <div class="columns has-margin-b30">
                <div class="column">
                    <h2 class="hero-heading has-text-centered">
                        Valós esettanulmányok. Valós <strong class="is-raspberry">eredmények.</strong>
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <a class="project-list__featured project-list__featured--centralized is-reversed"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'centralized']) }}"
                    >
                        <div class="project-list__featured__content">
                            <h1 class="project-list__featured__title">Centralized.me művészmenedzsment platform</h1>
                            <div class="project-list__featured__description">
                                A centralized.me a világ első művészmenedzsment applikációja, önszervezett zenészek és modern menedzserek számára. Tartalmaz minden olyan videó anyagot, útmutatót, munkafüzetet, költségvetést, email- és szerződésmintát, amire egy zenésznek szüksége lehet.
                            </div>
                            <span class="btn is-white">Olvasd el az esettanulmányt</span>
                        </div>

                        <img class="project-list__featured__image" src="{{ asset('media/projects/centralized-project-list.png?v4') }}" alt="Centralized.me művészmenedzsment platform" width="588" />
                    </a>
                    <a class="project-list__featured project-list__featured--kompozit"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'kompozit-field-service-management-app']) }}"
                    >
                        <div class="project-list__featured__content">
                            <h1 class="project-list__featured__title">Kompozit Field Service Management</h1>
                            <div class="project-list__featured__description">
                                A Kompozit egy helyszíni munkavégzést támogató megoldás amely segít a szervíz és karbantartási munkák hatékony dokumentálásában.
                            </div>
                            <span class="btn is-tangerine">Olvasd el az esettanulmányt</span>
                        </div>

                        <img class="project-list__featured__image" src="{{ asset('media/projects/kompozit-project-list.png?v2') }}" alt="Kompozit Field Service Management App" width="588" />
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

                    <h4 class="heading-3">Mennyi idő egy SaaS alkalmazás fejlesztése?</h4>
                    <p class="has-margin-b30"><small>Ez a komplexitástól függ. Az első használható verziót általában 3–4 hónap alatt el tudjuk indítani, de egy nagyobb platform ennél jóval több időt is igényelhet.</small></p>

                    <h4 class="heading-3">Segítetek abban is, hogy mit érdemes fejleszteni?</h4>
                    <p class="has-margin-b30"><small>Igen. Mély termék- és UX-tapasztalatunk van, így segítünk definiálni a terméket, priorizálni a funkciókat, és elkerülni a felesleges köröket.</small></p>

                    <h4 class="heading-3">A UI/UX design is része a csomagnak?</h4>
                    <p class="has-margin-b30"><small>Teljes mértékben. A UX a folyamat minden részében jelen van: a kezdeti user flow-któl a végső UI-ig és a design rendszer kialakításáig.</small></p>

                    <h4 class="heading-3">Tudtok más rendszerekkel is integrálni?</h4>
                    <p class="has-margin-b30"><small>Természetesen. Rendszeresen fejlesztünk olyan termékeket, amelyek CRM-ekkel, ERP-kkel, analitikai eszközökkel, e-mail szoftverekkel vagy külső API-kkal kommunikálnak.</small></p>

                    <h4 class="heading-3">Használtok mesterséges intelligenciát?</h4>
                    <p class="has-margin-b30"><small>Csak ott, ahol valóban értelme van. Ha az AI tényleges értéket tud hozzáadni, például dokumentumfeldolgozásban, ajánlórendszerekben vagy előrejelzésekben, akkor segítünk okosan beépíteni.</small></p>

                    <h4 class="heading-3">A fejlesztés után is lehet veletek dolgozni?</h4>
                    <p class="has-margin-b30"><small>Természetesen. Ügyfeleink többsége a termék indulása után is velünk marad. Folyamatos fejlesztésre, optimalizálásra és hosszú távú támogatásra számíthatsz tőlünk.</small></p>
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
                        Van egy termékötleted? Mi tudjuk, hogyan lesz belőle siker.
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
                    "@id": "{{ config('app.url') }}/hu/szolgaltatasok/saas-termek-fejlesztes",
                    "name": "SaaS termék fejlesztési szolgáltatások"
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
    "description": "B2B SaaS termékeket, piactereket és válogatott B2C megoldásokat építünk. A UX és technológiai kivitelezés mellett stratégiai iránymutatást is adunk. Több éves tapasztalatból, valódi sikerek és hibák alapján.",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, Digitális termékfejlesztés, MVP fejlesztés, SaaS, Laravel, Python",
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
                "@id": "{{ config('app.url') }}/hu/szolgaltatasok/saas-termek-fejlesztes",
                "name": "SaaS termék fejlesztési szolgáltatások"
            }
        }
    ]
}
</script>
@endpush