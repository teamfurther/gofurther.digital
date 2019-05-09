@section('title', 'Steiger ERP')
@section('description', 'A Steiger képviselői felvették velünk a kapcsolatot, hogy egy olyan rendszert dolgozzunk ki, amely automatizálja munkafolyamatukat és javítja ezek megbízhatóságát. Ezt megelőzően a Steiger számos szoftverre és táblázatra alapozott a munkájuk nyomon követésére, és hamar rájöttek, hogy mindez kevésbe hatásos és sok hibalehetőséget jelent.')
@section('preview_image', asset('media/projects/steiger-illustration-1.png'))

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Steiger ERP</h1>
                    <div class="project__summary">
                        <div class="columns">
                            <div class="column">
                                <h2 class="project__summary__heading">Összefoglaló</h2>
                                <p>A Steiger képviselői felvették velünk a kapcsolatot, hogy egy olyan rendszert dolgozzunk ki, amely automatizálja munkafolyamatukat és javítja ezek megbízhatóságát. Ezt megelőzően a Steiger számos szoftverre és táblázatra alapozott a munkájuk nyomon követésére, és hamar rájöttek, hogy mindez kevésbe hatásos és sok hibalehetőséget jelent.</p>
                                <p>Szoftverünk segíti őket abban, hogy nyomon kövessék a különböző részlegek által végzett munkát, az ügyfélkapcsolatoktól és az értékesítéstől a gyártásig.</p>
                            </div>
                            <div class="column">
                                <img class="is-pulled-right-tablet" src="{{ asset('media/projects/steiger-illustration-1.png') }}" alt="Esettanulmányok: Steiger ERP" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-hidden-touch">
                    <img src="{{ asset('media/projects/steiger-logo.png') }}" alt="Esettanulmányok: Steiger logo" />
                </div>
                <div class="column">
                    <h2 class="heading-2">Az ügyfél</h2>
                    <p>Alapjában véve a Steiger egy családi vállalkozás, amely több generáción át részt vett a fémfeldolgozó iparban. A cég 1994-ben alakult Nagykárolyban, és azóta folyamatosan növekszik. Napjainkban több mint 100 alkalmazottja van, 3 folyosós termelési csarnoka van 7 híddaruval és precíziós gépekkel és berendezésekkel ellátott szakosított műhelyei vannak. A fémfeldolgozás és a lakatos termékek gyártási portfóliója magába foglalja a térség legjelentősebb polgári és ipari építményeit.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">A kihívás</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>A szoftver fejlesztése során a Steiger csapatával együtt azonosítottuk azokat a fő kihívásokat, amelyekre megoldásokat kellett találnunk.</p>
                    <p>A fő kihívásunk az volt, hogy a szoftver elérhető kellett legyen mind irodákban, mind a termelési csarnokban. Ez azt jelentette, hogy megoldást kell találnunk arra, hogy nagy mennyiségű információt és fájlokat jelenítsünk meg reszponzív felületeken. A felhasználói élményhez kapcsolódó másik kérdés az volt, hogy a termelési csarnokban dolgozó munkavállalóknak védőkesztyű viselése közben kellett lehetősége legyen arra, hogy a szoftverrel interakcióba lépjen.</p>
                    <p>Másodlagos kihívásunk a meglévő értékesítési rendszer helyettesítése volt. Az árbecslések és az árajánlatok manuálisan készültek többféle táblázattal. Ez a folyamat nehézkes volt és sok hibának volt kitéve, ezért az automatizált megoldás megtalálása elengedhetetlen volt, de semmiképpen sem volt triviális, a szükséges adatmennyiség és a komplex számítások miatt.</p>
                </div>
                <div class="column">
                    <img class="is-pulled-right-tablet" src="{{ asset('media/projects/steiger-illustration-2.jpg') }}" alt="Esettanulmányok: Steiger ERP" />
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half">
                    <h2 class="heading-2">A megoldás</h2>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column">
                    <p>UX tervezőink és a fejlesztő csapatunk szorosan együttműködött a Steiger csapatával, hogy megoldásokat találjon a fenti kihívásokra. Az információs hierarchia megtervezése, az UX kutatások és a drótváz elkészítése számos munkaórát igényeltek annak érdekében, hogy minden lényeges adat kényelmesen elérhető legyen. Szintén nagy gondot fordítottunk az előkészületekre annak érdekében, hogy akár a számítógépes képzés nélküli munkavállalók is használhassák a rendszert. Fejlesztő csapatunk egy olyan CAD fájlmegjelenítőt is tervezett, amely lehetővé teszi a CAD rajzok könnyű megtekintését az alkalmazásban.</p>
                    <p>Ugyanakkor találnunk kellett egy olyan megoldást is, amely lehetővé teszi az alkalmazás használatát a termelési csarnokban, ami nem számítógépbarát környezet. Az érintőképernyős táblagépek nem jöhettek szóba, mert a munkavállalóknak ipari védőkesztyűt kell viselniük. Olyan megoldást javasoltunk, amely néhány QR-kód-szkennerhez kapcsolódó terminált feltételez. A dolgozók az RFID-kártyák használatával jelentkeznek be, majd QR-kódokat használnak a rajzok kiválasztására és a munkaidejük naplózására.</p>
                    <p>A árajánlattevő rendszer nemcsak UX szempontból, hanem üzleti elemzési és fejlesztési szempontból is kihívást jelentett. Minden egyes ajánlat több mint 50 kritériumot és komplex képleteket igényel. Ezért szorosan együttműködtünk a Steiger menedzsment és értékesítési csoportjaival, hogy minél több változót iktassunk ki, és minél jobban leegyszerűsítsük a folyamatot. Végül sikerült egy olyan megoldást találnunk, amely helyesen felbecsüli a munkaerőköltségeket és az anyagi szükségleteket a rendelkezésre álló munkaterhelés és készletszint alapján.</p>
                </div>
                <div class="column">
                    <img src="{{ asset('media/projects/steiger-illustration-3.jpg') }}" alt="Esettanulmányok: Steiger ERP" />
                </div>
            </div>
        </div>
    </section>
    <!--
    <section class="section">
        <div class="project__testimonial">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <img class="project__testimonial__picture" src="{{ asset('media/projects/steiger-laszlo-vagasi.png') }}" alt="Esettanulmányok: Steiger László Vágási ajánlás" />
                        <blockquote class="project__testimonial__content">
                            <p></p>

                            <cite class="project__testimonial__author">László VÁGÁSI, Menedzsment</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">Az eredmény</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p></p>
                </div>
                <div class="column">
                    <img class=" is-pulled-right-tablet" src="{{ asset('media/projects/steiger-illustration-4.jpg') }}" alt="Esettanulmányok: Steiger ERP" />
                </div>
            </div>
        </div>
    </section>
    -->
    <section class="section">
        <div class="project__stats">
            <div class="container">
                <div class="columns is-mobile is-multiline">
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">23<small>%</small></span>
                        <span class="project__stats__description">decrease in man-hours</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">2100<small>+</small></span>
                        <span class="project__stats__description">projekt 2017 óta</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">75</span>
                        <span class="project__stats__description">alkalmazott aki használja a rendszert</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">9</span>
                        <span class="project__stats__description">modul</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__tech-stack">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h2 class="heading-2">Alkalmazott technológiák</h2>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <ul class="project__tech-stack__list">
                            <li>Laravel</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>Javascript</li>
                            <li>nginx</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__gallery">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-2">Szeretne többet látni ebből a projektből?</div>
                        <a class="btn is-large is-primary" data-toggle="modal" data-target="#project-gallery">Látogassa meg a galériát</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">Egyéb esettanulmányok</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    @include(getLang() . '.projects.excerpts.njoy-the-hive')
                </div>
                <div class="column">
                    @include(getLang() . '.projects.excerpts.profnet-elearning-platform')
                </div>
            </div>
        </div>
    </section>
@endsection

@push('content-modals')
    <div class="modal" id="project-gallery" tabindex="-1" role="dialog">
        <div class="modal__dialog is-large">
            <div class="modal__content">
                <div class="modal__header">
                    <a class="modal__close" data-dismiss="modal">&times;</a>
                    <h3 class="modal__title">Steiger ERP</h3>
                    <span class="modal__subtitle">ERP Szoftver</span>
                </div>
                <div class="modal__body">
                    <img src="{{ asset('media/projects/steiger-gallery-1.jpg') }}" alt="Esettanulmányok: Steiger ERP galéria" />
                    <img src="{{ asset('media/projects/steiger-gallery-2.jpg') }}" alt="Esettanulmányok: Steiger ERP galéria" />
                    <img src="{{ asset('media/projects/steiger-gallery-3.jpg') }}" alt="Esettanulmányok: Steiger ERP galéria" />
                    <img src="{{ asset('media/projects/steiger-gallery-4.jpg') }}" alt="Esettanulmányok: Steiger ERP galéria" />
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
                    "name": "Munkáink"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
                    "name": "Steiger ERP"
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
    "description": "A Steiger képviselői felvették velünk a kapcsolatot, hogy egy olyan rendszert dolgozzunk ki, amely automatizálja munkafolyamatukat és javítja ezek megbízhatóságát. Ezt megelőzően a Steiger számos szoftverre és táblázatra alapozott a munkájuk nyomon követésére, és hamar rájöttek, hogy mindez kevésbe hatásos és sok hibalehetőséget jelent.",
    "headline": "Steiger ERP",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "ERP, Laravel",
    "mainEntityOfPage": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
    "name": "Steiger ERP",
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
                "name": "Munkáink"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
                "name": "Steiger ERP"
            }
        }
    ]
}
</script>
@endpush
