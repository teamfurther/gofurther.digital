@section('title', 'OVSZ esettanulmány')
@section('description', 'A regiszter kiváltja a jelenlegi papír alapú rendszereket és valós idejű kommunikációt, illetve gyors adatátvitelt tesz lehetővé országszerte, az OVSZ és a plazmaferezis állomások között.')
@section('preview_image', asset('media/projects/ovsz-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">OVSZ - Online keresztdonációs regiszter</h2>
        <h3 class="project__intro">
            Az online regiszter elősegíti a valós idejű adatcserét az OVSZ és a plazmaferezis állomások között.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Összefoglaló</h4>
                    <p>A regiszter fejlesztése előtt a plazmaferezis állomások analóg módon kellett beküldjék a laborvizsgálatok eredményeit a központi adatbázisba.</p>
                    <p>Az OVSZ eltárolta ezeket az eredményeket, de nem biztosított egy standard hozzáférési metódust.</p>
                    <p>Mivel nem létezett kétirányú adatcsere, a plazmaferezis állomások nem tudták felmérni, ha egy donor már kiszűrtnek lett minősítve egy másik állomás által.</p>
                    <p><small>A projekt a <a href="https://www.happymed.hu" target="_blank">Happymed-el</a> és a <a href="http://popcode.hu" target="_blank">Popcode-al</a> közreműködésben készült.</small></p>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img src="{{ asset('media/projects/ovsz-illustration.png') }}" alt="OVSZ - Online keresztdonációs regiszter" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        Az online regisztert jelenleg kiválasztott állomások tesztelik országszerte. Örömmel halljuk, hogy a visszajelzés túlnyomórészt pozitív. A plazmaferezis állomások nagyon hasznos eszköznek találják és folyamatosan új funkciókat kérnek.
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
                        <h4 class="heading-1">Kulcsproblémák és megoldások</h4>
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Nem létezett egységes hozzáférési mód a donor információkhoz</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>A plazmaferezik állomásoknak nem állt módjukban a korábban kiszűrtnek nyilvánított donorokat ellenőrízni.</p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>Az OVSZ adatbázis mérnökeivel közreműködve, meghatároztunk egy szerződést amely leírja milyen feltételek mellett férhetnek hozzá és dolgozhatják fel a donor adatokat a plazmaferezis állomások.</p>
                        <p>Ezek után lefejlesztettünk egy olyan adatcsere metódust, amely a laboreredményeket és a donor információkat automatikusan elküldi a központi adatbázisba.</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/ovsz-overview-1.png') }}" alt="OVSZ - Nem létezett egységes hozzáférési mód a donor információkhoz" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">A donoradatok feltöltése körülményes és megbízhatatlan volt</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>A plazmaferezis állomások korábban papír alapon tudták beküldeni a laboreredményeket, amit később manuálisan rögzítettek a központi adatbázisba.</p>
                        <p>Ez egy meglehetősen körülményes folyamat volt mind az állomások, mind az OVZ számára. Az emberi faktor miatt, ráadásul nagyon magas volt a hibázási lehetőség is.</p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>A standard adatcsere protokollok meghatározása lehetővé tette számunkra, hogy a laboreredményeket automatikusan elküldjük a központi adatbázisba.</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/ovsz-overview-2.png') }}" alt="OVSZ - A donoradatok feltöltése körülményes és megbízhatatlan volt" />
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
                        Érzékeny adatokkal dolgozni bonyolult
                    </h5>
                    <p>Az első dolog amit megtanultunk a projekt során az volt, hogy hogyan kezeljünk érzékeny egészségügyi adatokat.</p>
                    <p>Az erre vonatkozó Magyar jogszabályok nem mindig egyértelműek, ezért a HIPAA standardokat és annak a különböző implementációit is vizsgáltuk. Ennek eredményeként egy robusztus megoldást építettünk, ahol biztonságban vannak a donor információk.</p>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        A biztosított adatok hozzáférése és módosítása nem egyszerű
                    </h5>
                    <p>A legtöbb projektünk esetében megszoktuk, hogy teljes kontrollunk van az adatbázis fölött is, vagy legalább egy standard hozzáférési mód biztosított hozzá egy API-n keresztül.</p>
                    <p>Ebben az esetben egyik sem állt rendelkezésünkre. Közre kellett működjön az OVSZ adatbázis csapatával, hogy egy olyan rendszert tervezzünk ami több tűzfalon és köztes biztonsági kapun keresztül lehetővé teszi a bizalmas adatokhoz való hozzáférést.</p>
                </div>
            </div>
        </div>
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
                    "name": "OVSZ esettanulmány"
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
    "description": "The online registry replaces the current paper-based systems and provides real-time communication and swift data synchronization between the OVSZ (National Blood Transfusion Service) and donation centers across Hungary.",
    "headline": "OVSZ esettanulmány",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "App, Mobile application, Laravel",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "OVSZ esettanulmány",
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
                "name": "OVSZ esettanulmány"
            }
        }
    ]
}
</script>
@endpush