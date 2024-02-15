@section('title', 'Kompozit esettanulmány')
@section('description', 'A Kompozit egy helyszíni munkavégzést támogató megoldás amely segít a szervíz és karbantartási munkák hatékony dokumentálásában.')
@section('preview_image', asset('media/projects/kompozit-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <div class="container">
            <h2 class="project__title">Kompozit</h2>
            <h3 class="project__intro">
                A Kompozit egy helyszíni munkavégzést támogató megoldás amely segít a szervíz és karbantartási munkák hatékony dokumentálásában.
            </h3>
        </div>

        <img class="project__hero" src="{{ asset('media/projects/kompozit-hero.svg') }}" alt="Kompozit Digitális Munkalap Szoftver" />
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Összefoglaló</h4>
                    <p>A Kompozit a Further Digital Solutions első saját terméke. A Kompozit egy olyan digitális megoldás amely a helyszíni munkák elvégzését támogatja. Célunk az volt, hogy egy olyan applikációt építsünk ami bárki számára könnyen használható terepen és segíti a vállakozó, az ügyfelek és az alvállalkozók közötti kommunikációt és elszámoltathatóságot.</p>
                    <p>A termék két részből áll. Egyrészt rendelkezik egy webes felülettel ahol a munkákat lehet felvenni és ütemezni, illetve itt lehet a munkákról részletes riportokat is lekérni. A webes felület mellett pedig van egy cross-platform mobil applikáció amit terepen használnak a technikus kollégák a munkák dokumentálására.</p>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/kompozit-logo.svg') }}" alt="Kompozit" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        Indulás utáni héten már 3 cég tesztelte a terméket egy próbaidő keretén belül.<br />6 hónappal az első verzió kiadása után, büszkén elmondhatjuk, hogy a lemorzsolódási arány a felhasználóink között továbbra is 0%!
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__overview">
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <h4 class="heading-1">Milyen problémákat oldottunk meg?</h4>
                    </div>
                </div>
                <div class="columns has-margin-b90">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Minden információ egyetlen digitális helyen található</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>Legyünk őszinték. A munkások ritkán szeretnek papírmunkázni. Ha hiánytalanul ki is töltik a munkalapot, ezek gyakran elvesznek vagy megrongálódnak az autó csomagterében. Az eltűnt munkalapok pedig hiányos riportokhoz és a döntések hátráltatásához vezetnek. A hiányos munkalapokból kritikus információk hiányozhatnak az elvégezett feladatokról, a felhasznált anyagokról vagy munkaidőről ami az elvégzett munka megértéséhez szükséges. Emiatt pedig úgy a munkások, mint az irodai dolgozók számára nehéz a projekt haladását felmérni és az ügyfél felé elszámolni.</p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>With our solution every piece of information can be found and tracked in a single digital space. Digital worksheets streamline processes by allowing easy data entry, retrieval, and sharing. This enhances overall efficiency and reduces time spent searching for or recreating lost documents.</p>
                        <p>Megoldásunkat használva, minden információ egyetlen digitális helyen tárolódik A digitális munkalapok hatékonyabbá teszik a munkavégzés folyamatát, mivel egyszerűbb és gyorsabb lesz adatok felvitele, lekérdezése és megosztása. Az ügyfeleink kevesebb időt töltenek információk keresésével és elveszett dokumentumok újboli megszerkesztésével.</p>
                    </div>
                    <div class="column">
                        <img class="is-pulled-right" src="{{ asset('media/projects/kompozit-overview-1.png') }}" alt="Kompozit - Minden információ egyetlen digitális helyen található" />
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Valós idejű kommunikáció</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>Egy másik probléma amit kutatásunk során felfedeztünk az volt, hogy legtöbb cég az elszámolást hónap végére hagyja. Az ellentmondó vagy hiányzó adatokat ilyenkor már nehéz volt összeegyeztetni, hiszen senki sem emlékezett, hogy pontosan mi történt hetekkel ezelőtt a helyszínen.</p>
                        <em class="project__text-emphasis">Megoldás</em>>
                        <p>A Kompozit lehetővé teszi a munkaidő, felhasznált anyagok és alkatrészek, illetve fotó dokumentáció rögzítését, amit az irodában is rögtön látnak, így akár már aznap számlázhatnak az ügyfél felé..</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/kompozit-overview-2.png') }}" alt="Kompozit - Valós idejű kommunikáció" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h4 class="heading-1">
                        Tapasztalataink
                    </h4>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">1</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Sose spórolj a kutatással
                    </h5>
                    <p>Mielőtt egyetlen sor kódot is írtunk volna, több interjút is tartottunk potenciális ügyfelekkel, hogy megismerjük a folyamataikat, fájdalompontjaikat és igényeiket. Ezek után több drótvázat és interaktív prototípust is készítettünk amiket egy második körös interjú során mutattunk be az ügyfeleknek. Az itt kapott visszacsatolást beépítettük a végső termékbe, ezáltal garantálva a sikeres piacra dobást.</p>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        A fejlesztési kérelmeket nehéz kezelni
                    </h5>
                    <p>Az egyik legnehezebb feladat a kutatási és béta tesztelési fázis során felmerült fejlesztési igények kezelése volt. Amint az ügyfelek elkezdték használni a szoftvert, rögtön elkezdtek minket újabb és újabb fejlesztési ötlettel bombázni.</p>
                    <p>A termékünk egyik fő erénye viszont pont a könnyű kezelhetősége, ezért különösen óvatosnak kell lennünk amikor egy továbbfejlesztésről döntünk. Minden új funkció növeli a bonyolultságot is. Ezért minden fejlesztés előtt visszatértünk az alapokhoz és előbb egy prototípust készítettünk belőle. Amennyiben a prototípus iránti visszajelzések pozitívak voltak, a funkció bekerült a fejlesztési tervbe, különben pedig újratervezzük vagy eleve csírájában elfojtjuk.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <a class="project__gallery" href="https://kompoz.it" target="_blank">
            <img src="{{ asset('media/projects/kompozit-gallery.jpg') }}" alt="Látogasd meg a weboldalt" />

            <span class="btn is-large">Látogasd meg a weboldalt</span>
        </a>
    </section>

    <section class="section">
        <div class="project__contact">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-1">Neked miben segíthetünk?</div>
                        <a class="btn is-large" href="{{ localizedRoute('contact') }}">
                            Kérj egy ingyenes konzultációt
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.projects.banners.' . $bannerSlug)
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
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                    "name": "Kompozit esettanulmány"
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
    "description": "A Kompozit egy helyszíni munkavégzést támogató megoldás amely segít a szervíz és karbantartási munkák hatékony dokumentálásában.",
    "headline": "Kompozit esettanulmány",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "App, Digitális munkalap, Field Service Management, FSM, Flutter, Kompozit",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "Centralized esettanulmány",
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
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                "name": "Kompozit esettanulmány"
            }
        }
    ]
}
</script>
@endpush