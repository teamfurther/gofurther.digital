@section('title', 'PestCast esettanulmány')
@section('description', 'A PestCast egy SaaS termék kertészetek, kertészek és hobbisták számára amelynek segítségével előre lehet jelezni a különböző kártevők megjelenését')
@section('preview_image', asset('media/projects/pestcast-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">PestCast</h2>
        <h3 class="project__intro">
            A PestCast egy SaaS termék amelynek segítségével előre lehet jelezni a különböző kártevők megjelenését
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Összefoglaló</h4>
                    <p>
                        Az ügyfelünk az amerikai Virginia állam egy legnagyobb parkgondozó vállalata. A személyi kiadások mellett, a legnagyobb költségüket a kártevőírtásra használt vegyszerek jelentették.
                    </p>
                    <p>
                        Az egyik módja ennek a költségnek a csökkentésére a vegyszerek célzottabb alkalmazása. Ez gyakorlatban annyit jelent, hogy a kártevőírtó szereket rövidebb ideig, ugyanolyan hatékonysággal használják. Ügyfelünk azzal keresett meg minket, hogy egy olyan megoldást fejlesszünk, ami technológia segítségével lerövidíti a kártevőírtási ablakot.
                    </p>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/pestcast-logo.svg') }}" alt="PestCast" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        A PestCastet eredetileg belső felhasználásra szánta ügyfelünk, azonban hamar rájöttünk, hogy óriási lehetőség rejlik abban, ha egy SaaS terméket fejlesszünk belőle, amit kertészetek, kertészek és hobbisták egyaránt használhatnak majd.
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
                        <h4 class="heading-1">Hogyan oldottuk meg a problémát</h4>
                    </div>
                </div>
                <div class="columns has-margin-b90 is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Gépi tanulással a kártevők ellen</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>
                            Mivel nem rendelkeztünk szakági ismeretekkel, nem tudtuk, hogy egyáltalán mitől függ az, hogy mikor jelenik meg egy-egy kártevő. Ezért azzal kezdtük, hogy az ügyfél szakértő munkatársait interjúztattuk. Így tudtuk meg, hogy szoros összefüggés van a kartevők megjelenése és a megjelenés előtti hetek időjárása között.
                        </p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>
                            Rendelkeztünk egy adatbázissal, ami dokumentálta visszamenőleg ötven évre, hogy különböző földrajzi tájegységeket mikor jelentek meg a különböző kártevő. Ezt az adatbázist és historikus meteorológiai adatokat felhasználva betanítottunk egy gépi tanulás algoritmust, hogy előre jelezze a csapadék, illetve az átlag- és csúcshőmérsékletek alapján, hogy az idén mikor várható egy-egy kártevő megjelenése.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/pestcast-overview-1.png') }}" alt="PestCast - Gépi tanulással a kártevők ellen" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Az algorimus finomítása</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>
                            Az eredmények biztatóak voltak, azonban csupán egy külső adatbázisra hagyatkozva nem értük el az elvárt pontosságot. A vegyszerezési intervallum továbbra is túl tág volt. Ezért elkezdtünk ötletelni arról, hogy hogyan tudunk több adathoz jutni.
                        </p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>
                            We realised that we could turn the app into a SaaS product. This would mean more people started using it, which we could turn into an advantage by allowing users to report pest occurrences. The faster the SaaS product scales, the more accurate our ML algorithm becomes.
                        </p>
                        <p>
                            Ezen a ponton tudatosult bennünk, hogy az applikációt átalakíthatnánk egy SaaS termékké. Ez azt jelentené, hogy több ember használja majd, akik az extra adatokat biztosítani tudnák nekünk. Így minél gyorsabban skálázódott a SaaS termék, annál pontosabb lett a gépi tanulás algoritmus.
                        </p>
                    </div>
                    <div class="column">
                        <img class="is-pulled-right" src="{{ asset('media/projects/pestcast-overview-2.png') }}" alt="Az algorimus finomítás" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <a class="project__gallery" data-toggle="modal" data-target="#gallery-modal">
            <img src="{{ asset('media/projects/pestcast-gallery.jpg') }}" alt="Galéria megnyitása" />

            <span class="btn is-large">Galéria megnyitása</span>
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

@push('content-modals')
    <div class="modal" id="gallery-modal" tabindex="-1" role="dialog">
        <div class="container">
            <div class="project__gallery-modal">
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/pestcast-gallery-1.jpg') }}" alt="PestCast" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Közelgő kártevők</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    A gépi tanulás algoritmus mint lokáció meghatározza, hogy melyik kártevők fognak valószínűsíthetően megjelenni a következő időszakban.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/pestcast-gallery-2.jpg') }}" alt="PestCast" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Kártevő megjelenésének rögzítése</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    Sajnos az algoritmus nem 100% pontos és időnként előfordulhat, hogy hamarabb megjelenik egy kártevő. Ilyen esetekben arra ösztönözzük a felhasználókat, hogy ezt jelentség be az applikáció segítségével. Ezek az adatok segítenek abban, hogy az algoritmust tovább finomhangoljuk és jobb eredményeket adjunk a jövőben.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/pestcast-gallery-3.jpg') }}" alt="PestCast" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Kártevő információs oldal</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    A központi funkciókon kívül, az applikáció tudásbázisként is működik, segítve a felhasználókat, hogy azonosítsák és megfékezzék a kártevők elszaporodását.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns has-text-centered">
                    <a class="btn is-large is-pearl" data-dismiss="modal">Galéria bezárása</a>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->
    <div class="modal__backdrop"></div>
@endpush



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
                    "name": "PestCast esettanulmány"
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
    "description": "A PestCast egy SaaS termék kertészetek, kertészek és hobbisták számára amelynek segítségével előre lehet jelezni a különböző kártevők megjelenését.",
    "headline": "PestCast esettanulmány",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "SaaS, Gépi tanulás, Mesterséges intelligencia, Laravel, Vue",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "PestCast esettanulmány",
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
                "name": "PestCast esettanulmány"
            }
        }
    ]
}
</script>
@endpush