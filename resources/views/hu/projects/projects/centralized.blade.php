@section('title', 'Centralized esettanulmány')
@section('description', 'A centralized.me a világ első művészmenedzsment applikációja, önszervezett zenészek és modern menedzserek számára.')
@section('preview_image', asset('media/projects/centralized-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">Centralized.me</h2>
        <h3 class="project__intro">
            A centralized.me a világ első művészmenedzsment applikációja, önszervezett zenészek és modern menedzserek számára.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Összefoglaló</h4>
                    <p>
                        A centralized.me a világ első automatizált digitális menedzsere feltörekvő zenészek számára. Számukra biztosít útmutatást, kontrollt a karrierjük fölött és kapcsolatokat az iparággal, hogy több idejük maradjon a zenére.
                    </p>
                    <p>
                        A centralized.me-n videók, útmutatók, munkafolyamatok, email- és szerződésminták, illetve költségvetések segítik a művészeket, hogy megtalálják az irányt a zeneiparban.
                    </p>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/centralized-logo.svg') }}" alt="Centralized" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        Miután 2018-ban sikeresen lefejlesztettük az első MVP-t, Brian, a Centralized megálmodója nagyszerű hírekkel keresett meg: sikerült befektetést szerezniük és megkezdhetjük a munkát a teljes értékű verzión.
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
                <div class="columns is-reversed has-margin-b90">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">A rendszer könnyen skálázható kell legyen</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>
                            Mivel egy start-up projektről van szó, azt reméltük, hogy egy adott ponton rengeteg felhasználója lesz a platformnak. A marketing terv alapján pedig arra számítottunk, hogy óriási hullámokban fognak érkezni.
                        </p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>
                            Mielőtt egyetlen sor kódot írtunk volna, alaposan meg kellett tervezzük a szoftver architektúrát. Egy olyan rendszert és felhő szolgáltatót választottunk ami lehetővé teszi, hogy gyorsan fel tudjuk skálázni a rendszert, akár több millió felhasználót kiszolgálva.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/centralized-overview-1.png') }}" alt="Centralized - A rendszer könnyen skálázható kell legyen" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">A rendszer részletes analitikákat kell gyűjtsön</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>
                            Az MVP-ből kinyert analitika és a kapott visszajelzések mind beépítésre kerültek a második verzióba. Ezért nagyon fontosnak éreztük, hogy az új verzióból még pontosabb mérőszámokat tudjunk kinyerni.
                        </p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>
                            A szokásos Google Analytics és Hotjar telepítése mellett, szorosan közreműködtünk a marketing csapattal, hogy beállítsunk egy sorozat követő kódot, A/B tesztet és feedback eszközt annak érdekében, hogy folyamatosan tudjuk a terméket fejleszteni és releváns funkcióval kiegészíteni.
                        </p>
                    </div>
                    <div class="column">
                        <img class="is-pulled-right" src="{{ asset('media/projects/centralized-overview-2.png') }}" alt="Centralized - A rendszer részletes analitikákat kell gyűjtsön" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="project__testimonial">
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <img class="project__testimonial__picture" src="{{ asset('img/testimonials-brian-dubb.png') }}" alt="Centralized Brian Dubb testimonial" />
                        <cite class="project__testimonial__author">DUBB Brian</cite>
                        <span class="project__testimonial__title">Alapító, Centralized</span>
                        <blockquote class="project__testimonial__content">
                            <p>
                                "A Further határidőn és költségvetésen belül fejlesztette le az MVP-t, ami sikeres béta teszteléshez, majd egy második kör befektetéshez vezetett. Örvendünk hogy az applikáció második verzióján is a Furtherrel együtt dolgozhatunk."
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
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
                    <div class="list-hero">↪</div>
                </div>
                <div class="column is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        A start-up projektek és nagyvállalati projektek nagyon különbözőek
                    </h5>
                    <p>
                        A centralized.me előtt és után is dolgoztunk már start-up projekteken, de kevés projekt volt ennyire pörgős. A szokásos nagyvállalati projektjeinkhez képest, ahol legtöbb döntés lassú és bürokratikus, ennél a projekthez egy teljesen más gondolkodásmódra volt szükség.
                    </p>
                    <p>
                        Ahhoz, hogy flexibilisek maradjunk és tartani tudjuk a lépést a gyors döntéshozásokkal amit egy start-up projekt igényel, apró változtatásokat kellett eszközöljünk a projektmenedzsment folyamatainkban.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <a class="project__gallery" data-toggle="modal" data-target="#gallery-modal">
            <img src="{{ asset('media/projects/centralized-gallery.jpg') }}" alt="Galéria megnyitása" />

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
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/centralized-gallery-1.jpg') }}" alt="Centralized" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Varázsló</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    A felhasználói történet egy varázsló űrlap kitöltésével kezdődik. A varázsló megmondja hol tart a felhasználó a zenei karrier útján.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/centralized-gallery-2.jpg') }}" alt="Centralized" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Terv</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    A válaszok alapján minden felhasználónak generálunk egy testreszabott tervet amit követhetnek.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/centralized-gallery-3.jpg') }}" alt="Centralized" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Útmutatók</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    A felhasználó tervében minden lépés egy útmutató oldalra vezet. Ezek az útmutatók videó tartalmakat, checklisteket, email- és szerződéstervezeteket, illetve költségvetéseket tartalmaznak.
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
                    "name": "Centralized esettanulmány"
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
    "description": "A centralized.me a világ első automatizált digitális menedzsere feltörekvő zenészek számára. Számukra biztosít útmutatást, kontrollt a karrierjük fölött és kapcsolatokat az iparággal.",
    "headline": "Centralized esettanulmány",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "MVP, Start-up, Laravel, Vue",
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
                "name": "Centralized esettanulmány"
            }
        }
    ]
}
</script>
@endpush