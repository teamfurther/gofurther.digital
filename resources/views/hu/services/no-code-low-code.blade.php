@extends('hu.site')

@section('title', 'No-code és low-code fejlesztési szolgáltatások')
@section('description', 'Segítünk technikai háttérrel nem rendelkező alapítóknak MVP-t építeni és piacra dobni no-code és low-code eszközökkel – gyorsan és megfizethetően.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        No-code és low-code fejlesztés
                    </h5>
                    <h1 class="heading-1 has-margin-b5">
                        Nincs CTO-d? <strong class="is-raspberry">Nem gond.</strong>
                    </h1>
                    <div>
                        Segítünk technikai háttérrel nem rendelkező alapítóknak MVP-t építeni és piacra dobni no-code és low-code eszközökkel: gyorsan és megfizethetően.
                    </div>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <div class="services__service__benefits is-raspberry">
                        <div class="services__service__benefits__badge">Előnyök</div>
                        <ul class="services__service__benefits__list has-margin-b30">
                            <li>Indulás 2-3 héten belül, hónapok helyett</li>
                            <li>Több mint {{ config('site.stats.projects') }} projektnyi tapasztalat</li>
                            <li>A fókusz a gyors validáción van, nem a technológián</li>
                            <li>Korai visszajelzések, magabiztos tőkebevonás</li>
                            <li>Gyors szállítás Bubble-lel és Flutterflow-val</li>
                            <li>AI-alapú fejlesztés Polymet.ai és Lovable segítségével</li>
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
                    <h2 class="heading-1 has-margin-b15 has-text-centered">
                        Kinek szól ez?
                    </h2>
                    <h4 class="heading-5 has-margin-b60 has-text-centered">
                        No-code/low-code szolgáltatásunk azoknak a korai fázisú alapítóknak szól, akik gyorsan szeretnék az ötletüket validálni vagy egy befektetőket meggyőző prototípust gyártani.
                    </h4>
                </div>
            </div>
            <div class="columns is-reversed-tablet">
                <div class="column is-6-desktop is-offset-1-desktop is-8-tablet">
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Van egy ötleted, de nincs technikai társalapítód</h3>
                            <p>Mély iparági tudásod van, világos víziód, de elakadtál a „hogyan építsem meg?” szakaszban. Mi leszünk a termék- és tech-csapatod, hogy továbbléphess.</p>
                        </div>
                    </div>
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Szeretnéd tesztelni az ötletedet, mielőtt belevágsz a teljes fejlesztésbe</h3>
                            <p>Mielőtt hónapokat költenél fejlesztésre, szeretnél valami működőt indítani, visszajelzést gyűjteni és validálni a keresletet. Mi gyorsan eljuttatunk idáig olyan eszközökkel, amik nem kötnek meg hosszú távra.</p>
                        </div>
                    </div>
                    <div class="is-flex">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Tőkét szeretnél bevonni vagy akcelerátor programba jelentkeznél</h3>
                            <p>A befektetők értékelik a valódi eredményeket. Olyan prototípusokat építünk, amelyekkel kitűnhetsz, bizonyíthatod az ötleted működőképességét, és gyorsabban tudsz tőkét bevonni.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-5.jpg') }}" alt="Further csapat" />
                        <img src="{{ asset('img/team-4.jpg') }}" alt="Further csapat" />
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered">
                    <a class="btn has-margin-t15 is-large is-pearl" href="#schedule">
                        Legyen neked is terméked pár nap alatt
                    </a>
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
                    <h2 class="heading-1 has-margin-b60 has-text-centered">Mit kapsz tőlünk?</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-pearl is-small"></div>
                    <h3 class="heading-4">Termékszemlélet</h3>
                    <p>Velünk egy multidiszciplináris csapatot kapsz, akik nemcsak kódot írnak, hanem problémákat oldanak meg.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-small is-tangerine"></div>
                    <h3 class="heading-4">Kattintható prototípusok</h3>
                    <p>Interaktív prototípusokat szállítunk korai demókhoz, felhasználói teszteléshez vagy befektetői prezentációkhoz.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-raspberry is-small"></div>
                    <h3 class="heading-4">Teljesen működő prototípusok</h3>
                    <p>Már néhány napon belül elkészítjük az első működő verziót – nem hónapok alatt. Kezdd el korán a tesztelést.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-cobalt is-small"></div>
                    <h3 class="heading-4">Tulajdonjog és dokumentáció</h3>
                    <p>A terméked teljes mértékben a tiéd lesz. Részletes dokumentációt is adunk, hogy te vagy jövőbeli fejlesztők is könnyen kezelhessék.</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <a class="btn has-margin-t15 is-large is-pearl" href="#schedule">
                    Építsd meg a terméked velünk
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
                    <a class="project-list__featured project-list__featured--onepagelink-electronic-press-kit-builder"
                       href="{{ route(getLang() . '.projects.show', ['slug' => 'onepagelink-electronic-press-kit-builder']) }}"
                    >
                        <div class="project-list__featured__content">
                            <h1 class="project-list__featured__title">OnePageLink - Electronic Press Kit Builder</h1>
                            <div class="project-list__featured__description">
                                A OnePageLink egy EPK, azaz electronic press kit építő, aminek segítségével művészek menedzselni tudják a promóciós anyagaikat, illetve elküldeni ezeket rendezvényszervezőknek és a sajtónak. Mindezt egyetlen link segítségével.
                            </div>
                            <span class="btn is-black">Olvasd el az esettanulmányt</span>
                        </div>

                        <img class="project-list__featured__image" src="{{ asset('media/projects/opl-project-list.png?v4') }}" alt="OnePageLink - Electronic Press Kit Builder" width="588" />
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

                    <h4 class="heading-3">Mennyi idő alatt készül el egy prototípus?</h4>
                    <p class="has-margin-b30"><small>A bonyolultságtól függően a projektek általában 10–30 napot vesznek igénybe. Gyorsan dolgozunk, a kulcsfunkciókra fókuszálunk, és hagyunk teret az iterációnak. Ha először egy egyszerű prototípusra van szükséged, azt akár néhány napon belül szállítjuk.</small></p>

                    <h4 class="heading-3">Lehet befektetést szerezni egy no-code MVP-vel?</h4>
                    <p class="has-margin-b30"><small>Igen. Ügyfeleink közül többen is no-code MVP segítségével kerültek be akcelerátor programokba vagy szereztek pre-seed befektetést. Egy működő termék valós eredményekkel jóval meggyőzőbb, mint egy prezentációs dia.</small></p>

                    <h4 class="heading-3">Én leszek a tulajdonosa a terméknek?</h4>
                    <p class="has-margin-b30"><small>Igen, 100%. Te birtoklod majd a platformfiókot (pl. Bubble, Flutterflow), a munkafolyamatokat, adatbázist és vizuális elemeket. Teljes dokumentációt is adunk, hogy saját magad vagy jövőbeli fejlesztők is átvehessék.</small></p>

                    <h4 class="heading-3">Később én is tudom frissíteni vagy kezelni az alkalmazást?</h4>
                    <p class="has-margin-b30"><small>Igen. Ez az egyik legnagyobb előnye ezeknek a platformoknak. Megmutatjuk, hogyan kezeld az alapvető tartalmakat és folyamatokat. De mi is támogatunk a jövőben, ha úgy szeretnéd.</small></p>

                    <h4 class="heading-3">Mi történik a termék indulása után?</h4>
                    <p class="has-margin-b30"><small>Nem tűnünk el. Segítünk a frissítésekben, új funkciókat fejlesztünk vagy kielemezzük az első felhasználók visszajelzéseire épülő iterációkat.</small></p>

                    <h4 class="heading-3">Használtok mesterséges intelligenciát a fejlesztés során?</h4>
                    <p class="has-margin-b30"><small>Ma már megkerülhetetlen. A Polymet.ai vagy a Lovable segít automatizálni a UX-et, tartalmat, onboarding folyamatokat vagy üzleti logikát. Ez felgyorsítja a fejlesztést és javítja a felhasználói élményt.</small></p>

                    <h4 class="heading-3">Mi a különbség a no-code és a low-code között?</h4>
                    <p class="has-margin-b30"><small>A no-code vizuális felületekkel és előre elkészített komponensekkel dolgozik. A low-code nagyobb testreszabhatóságot ad (pl. Flutterflow segítségével). Mindig azt használjuk, ami a te projektedhez a legjobb.</small></p>

                    <h4 class="heading-3">Később át lehet térni egyedi fejlesztésre?</h4>
                    <p><small>Természetesen. Minden dokumentálva van, így zökkenőmentesen átadható, amikor eljön a skálázás ideje.</small></p>
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
                        Te hozod az ötletet – mi hozzuk a termékcsapatot.
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
                    "@id": "{{ config('app.url') }}/hu/szolgaltatasok/no-code-es-low-code-fejlesztes",
                    "name": "No-code és low-code fejlesztési szolgáltatások"
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
    "description": "Segítünk technikai háttérrel nem rendelkező alapítóknak MVP-t építeni és piacra dobni no-code és low-code eszközökkel – gyorsan és megfizethetően.",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, Digitális termékfejlesztés, MVP fejlesztés, No-code, Low-code, Bubble.io, Flutterflow, Polymet.at, Lovable",
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
                "@id": "{{ config('app.url') }}/hu/szolgaltatasok/no-code-es-low-code-fejlesztes",
                "name": "No-code és low-code fejlesztési szolgáltatások"
            }
        }
    ]
}
</script>
@endpush