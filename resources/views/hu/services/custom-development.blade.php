@extends('hu.site', ['bodyClass' => 'has-hero'])

@section('title', 'Egyedi szoftverfejlesztés')
@section('description', 'A Further segít testreszabott és ügyfélközpontú digitális megoldások tervezésében és fejlesztésében.')

@section('content')
    <section class="hero is-pearl">
        <div class="hero__video">
            <a class="hero__video__thumb" data-toggle="modal" data-target="#video-modal">
                <img src="{{ asset('img/presentation-video-thumb.png') }}" alt="Tekintsd meg bemutató videónkat" />
            </a>
        </div>
        <a class="hero__cta" data-toggle="modal" data-target="#video-modal">
            Szeretnéd megtudni miben segíthetünk?<strong>Tekintsd meg videónkat</strong>
        </a>
        <a class="hero__scroll" href="{{ url('#intro') }}"></a>
    </section>

    <section class="section is-dark" id="intro">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12-tablet is-5-widescreen">
                    <h2 class="hero-heading">
                        Az <strong class="is-pearl">időd túl értékes</strong>, hogy ne automatizálj.
                    </h2>
                </div>
                <div class="column is-offset-1-widescreen">
                    <p>
                        Értékes időd vesztegetsz olyan feladatokkal amelyeket egy szoftver is el tud végezni? Nem állnak rendelkezésedre a megfelelő adatok amik az informált döntéshozáshoz szükségesek? Gyártóipari vagy szolgáltató céged van? Esetleg kereskedsz? Nem számít!
                    </p>
                    <p>
                        Egy gondosan megtervezett szoftver automatizálni tudja az üzleti folyamataidat és rendszerezni tudja a céges adatokat. Ez csökkenti az emberi hibák lehetőségét és növeli a produktivitást.
                    </p>
                    <p>
                        Segítünk egy digitális megoldás bevezetésében: időt szakítunk arra, hogy megismerjük a vállalkozásod, így olyan testreszabott szoftvereket fejlesztünk, melyek a Te konkrét igényeid szolgálják ki.
                    </p>
                    <p>
                        Több mint {{ config('site.stats.company_age') }} év tapasztalatunk van üzleti célszoftverek fejlesztésében, így nyugodtan állíthatjuk, hogy szakértői vagyunk az olyan üzleti megoldásoknak amelyek segítenek a folyamatautomatizációban, adatrendszerezésben és a vállalkozásod növekedésében,
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-cobalt">5 jel</strong> hogy érdemes egy szoftverbe befektetned:
                    </h2>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">1</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h3 class="heading-4">
                        Nem látod át az adatokat<br />amik szükségesek a döntéshozáshoz
                    </h3>
                    <p>
                        Az üzlet gyorsabban pörög, mint bármikor. A hatékony üzleti intelligencia a gyors adatelemzésre alapszik, de ha az adatok több Excel táblázatba vannak lementve, vagy még rosszabb, papír alapon vannak tárolva, akkor Te és csapattagjaid nehezen juttok a megfelelő információhoz.
                    </p>
                    <p>
                        Ha az összes információ egységesítve és központosítva van egy integrált szoftverrendszerbe, egy holisztikus képet kaphatsz a bármikori helyzetről, illetve kiaknázhatod az üzleti intelligenciában rejlő lehetőségeket.
                    </p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h3 class="heading-4">
                        Automatizálható feladatokra<br />vesztegeted az időt
                    </h3>
                    <p>
                        A <a href="https://www.mckinsey.com/featured-insights/future-of-work/jobs-lost-jobs-gained-what-the-future-of-work-will-mean-for-jobs-skills-and-wages#part1" target="_blank">McKinsey jelentése</a> szerint az irodai dolgozók közel 60%-a legalább 6 órával kevesebbet dolgozna hetente bizonyos feladatok automatizálásával. Egy integrált szoftvermegoldás képes az összes folyamatot elejétől végéig kezelni, így az alkalmazottaid az értékes munkaóráikat valóban értékes munkával tölthetik el.
                    </p>
                    <p>
                        Azt tapasztaltuk, hogy a legnagyobb termelékenységnövelő tényezők az automatikus jóváhagyások, az állapotfrissítések és az adatgyűjtés. Ezek nemcsak az ismétlődő munkára fordított időt, hanem az emberi hibák lehetőségének arányát is csökkentik.
                    </p>
                    <p>
                        Ennek további előnye, hogy csapatod pozitív fényben látja majd az automatizálást, amely lehetőséget biztosít arra, hogy nemcsak munkájuk, de a személyes életük jobb legyen.
                    </p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">3</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h3 class="heading-4">
                        Elavult IT<br />infrastruktúrával rendelkezel
                    </h3>
                    <p>Az informatikai részlegtől való függés, a gyakori hardverfrissítések vagy a folyamatosan növekvő licencköltségek arra utalnak, hogy elavult informatikai infrastruktúrát használsz.</p>
                    <p>A KKV-k kétharmada elavult verziójú üzleti szoftvereket futtat, időt, pénzt és kritikus erőforrásokat pazarol.</p>
                    <p>Ahelyett, hogy egy már elavult rendszert toldozzál-foldozzál, gyakran jobb, ha egy modern szoftvermegoldásra váltasz, amely lehetővé teheti a változó üzleti igényekre való gyors választ.</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">4</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h3 class="heading-4">
                        Több szoftvert használsz,<br />amelyek nem kommunikálnak egymással
                    </h3>
                    <p>
                        A legtöbb vállalkozás különböző szoftvereket futtat a különböző részlegeken. A CRM (ügyfélkapcsolat-kezelés) segíti az értékesítési csapatot, de van egy leltárrendszer, egy számviteli szoftver is és így tovább.
                    </p>
                    <p>
                        Annak ellenére, hogy nagyszerűen működnek azon a részlegen, ahol használják ezeket, sok olyan információt tartalmaznak, amelyek láthatatlanok a csapat többi részének.
                    </p>
                    <p>
                        Az adatok sokszorosítása a rendszerekben növeli a hibalehetőséget és végső soron egy szükségtelen folyamat. Egy központi információforrásként működő szoftvermegoldás segítségével mindeki ugyanahhoz a pontos, naprakész tudáshoz fér hozzá, amely lehetővé teszi a jobb döntések meghozatalát.
                    </p>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">5</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h3 class="heading-4">
                        Nem használod ki a felhő- és <br />a mobilmegoldások adta lehetőségeket
                    </h3>
                    <p>
                        Napjainkban, ha a csapatod nem tudja bárhol elérni az információkat, és nem tud a munkával bárhol haladni, akkor veszítesz a versenytársaival szemben. Gondolj csak az értékesítési csapatodra, amely nem fér hozzá a készletkimutatáshoz amikor terepmunkán van, vagy ha a vezetőség nem fér hozzá a jelentésekhez az üzleti találkozókon.
                    </p>
                    <p>
                        A modern felhőalapú szoftver gyorsan méretezhető, olcsóbban karbantartható, minden mobileszközre reszponzív interfészt kínál, és lehetővé teszi a csapatod számára, hogy útközben hozzáférjen az információkhoz és frissítse ezeket, folyamatosan fejlesztve üzleti tevékenységét.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.solutions')

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        Akik korábban már <strong class="is-tangerine">minket választottak: </strong>
                    </h2>
                </div>
            </div>
            <div class="columns has-margin-b60">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="testimonial__picture" src="{{ asset('img/testimonials-attila-szegedi.png') }}" alt="Brewie Attila Szegedi testimonial" />
                    <blockquote class="testimonial__content">
                        <p>
                            A Further testreszabta a Chronos tartalommenedzsment rendszerüket, hogy megfeleljen a mi specifikus igényeinknek. Jelenleg a tudástárunk motorjaként üzemel. A rendszer tökéletesen bevált és lehetővé teszi számunkra, hogy nagymennyiségű információt tároljunk és osszunk meg a sörfőző gépunkről és a sörfőzésről.
                        </p>
                        <cite class="testimonial__author">SZEGEDI Attila, Brewie</cite>
                    </blockquote>
                </div>
            </div>
            <div class="columns has-margin-b60">
                <div class="column is-8-tablet is-offset-2-tablet">
                    <img class="testimonial__picture is-right-aligned" src="{{ asset('img/testimonials-adorian-demeter.png') }}" alt="nJoy - The Hive Adorian Demeter testimonial" />
                    <blockquote class="testimonial__content">
                        <p>Nem tudnám elképzelni, hogyan működne a termékfejlesztésünk a Hive nélkül. Bevezetése óta az új termékek fejlesztésének ideje 20%-al csökkent, minden adatunk rendszerezett és könnyen utánkövethető.</p>
                        <cite class="testimonial__author">DEMETER Adorian, nJoy</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.projects')
@endsection



@push('content-modals')
<div class="modal is-centered-vertical" id="video-modal" tabindex="-1" role="dialog">
    <div class="modal__dialog is-large">
        <div class="modal__content">
            <div class="video-container">
                <iframe width="880" height="495" src="https://www.youtube.com/embed/mP1choUB52Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div><!-- /.modal__content -->
    </div><!-- /.modal__dialog -->
</div><!-- /.modal -->
<div class="modal__backdrop"></div>
@endpush



@push('structured-data')
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
                    "name": "Főoldal"
                }
            },
            {
                "@type": "ListItem",
                "position": "2",
                "item": {
                    "@id": "{{ localizedRoute('services.custom-development') }}",
                    "name": "Egyedi szoftverfejlesztés"
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
    "inLanguage": "hu_hu",
    "keywords": "Egyedi szoftverfejlesztés, Integrált szoftveres megoldások, ERP fejlesztés, Szoftverfejlesztés, Webfejlesztés",
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
                "@id": "{{ localizedRoute('services.custom-development') }}",
                "name": "Egyedi szoftverfejlesztés"
            }
        }
    ]
}
</script>
@endpush
