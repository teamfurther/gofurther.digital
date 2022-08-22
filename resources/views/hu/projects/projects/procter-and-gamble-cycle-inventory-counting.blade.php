@section('title', 'Procter & Gamble CIC esettanulmány')
@section('description', 'A P&G megbízott minket, hogy fejlesszünk számukra egy leltározó applikációt az állótőke nyílvántartasának segítésére.')
@section('preview_image', asset('media/projects/pg-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">Procter & Gamble - Cycle Inventory Counting</h2>
        <h3 class="project__intro">
            A P&G megbízott minket, hogy fejlesszünk egy leltározó applikációt az állótőke nyílvántartasának segítésére.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Összefoglaló</h4>
                    <p>Mielőtt elkezdtük a közös munkát, a P&G nyomtatott táblázatokat használt a gyöngyösi létesítményükben található több mint 7000 tárgy nyomonkövetésére. Az állótőke menedzserek (fixed asset accountant / FAA) SAP-ból töltötték le az ellenőrizendő álló tőke listát és osztották szét a feladatok a felelősök (fixed asset owner / FAO) között.</p>
                    <p>Az FAO-k ezután a táblázatokban jelölték a tárgyak meglétét, állapotát és hollétét. A tárgyakról fotókat is készítettek. A folyamat végén az összes információt visszatöltötték SAP-be. Ahhoz, hogy a több mint 7000 tárgyat leltárba vegyék, 3 évre volt szükségük!</p>
                    <p>A P&G-val szorosan közreműködve fejlesztett applikáció letölti az adatokat SAP-ből, egyenlően elosztja a munkát az FAO-k között akik beolvassák a tárgyakon található RFID cimkét vagy QR kódot, lefotózzák a tárgyat. A folyamat végén minden adat automatikusan feltöltésre kerül vissza az SAP-ba. Ezzel a megoldással lényegesen sikerült csökkentsük a leltározáshoz szükséges időt, 67%-al, egyetlen egy évre.</p>
                    <div class="project__stats">
                        <div class="project__stat is-downward">
                            <span>7<small>e +</small></span> tárgy
                        </div>
                        <div class="project__stat">
                            <span>67<small>%</small></span> hatékonyság-<br />növelés
                        </div>
                    </div>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/pg-logo.svg') }}" alt="Procter & Gamble" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        A CIC (Cycle Inventory Counting) applikációt 2020 tavasszal adtuk át. A korábban 3 évet tartó leltározási ciklust 1 évre sikerült redukáljuk, 67%-os hatékonyságnövekedést elérve!
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
                        <h4 class="heading-1">Kulcskérdések és megoldások</h4>
                    </div>
                </div>
                <div class="columns has-margin-b90 is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Egyéb rendszerekkel való integráció</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>A P&G már több szoftvert használt, mint az SAP vagy a Microsoft Azure. Biztosítanunk kellett a zökkenőmentes kapcsolódást ebben a környezetbe.</p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>Korábban már volt tapasztalatunk a Microsoft Azure-al, így megvolt a megfelelő termékismeretünk az integrációhoz. Közreműködve a P&G IT osztályával felállítottuk a szükséges kapcsolatokat. Ami az SAP-t illetve, folyamatosan tanulmányoztuk a fejlesztői dokumentációt és egyeztettünk a P&G csapatával, hogy a folyamat teljesen automatizált legyen.</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/pg-overview-1.png') }}" alt="P&G - Egyéb rendszerekkel való integráció" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Tárgyak helyzetének pontos meghatározása</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>Minden tárgy esetében, pontosan meg kellett határoznunk ezeknek a fizikai lokációját. A GPS tökéletesen működött nagyobb terek esetén, de nem volt elég pontos a kisebb szobák, irodák esetén.</p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>Eredetileg az applikációt kizárólag GPS alapú helyzetmeghatározással indítottuk el, teszt jelleggel. A vártaknál sokkal jobban már ez a rendszer is, amivel sikerült 90%-os pontosságot elérni. A kisebb terek esetén, ezt a GPS alapú megoldást kiterjesztettük beacon technológiával is. Az applikáció ezekből a kicsit, stratégikusan elhelyezett, beaconnek nevezett IoT eszközökből nyerte ki a pontos lokációt. Ezzel a megoldással már 100%-os pontosságot tudtunk elérni.</p>
                    </div>
                    <div class="column has-text-right">
                        <img src="{{ asset('media/projects/pg-overview-2.png') }}" alt="P&G - Beacon technológia" />
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
                        IoT eszközökkel dolgozni jó szórakozás
                    </h5>
                    <p>Imádunk olyan projekteken dolgozni, ahol új technológiákat próbálhatunk ki. A P&G Cycle Inventory Counting applikációja jó példája volt egy ilyen projektnek. A beacon technológia már 2013-ban megjelent, de továbbra sem terjedt el, a korlátolt felhasználási területei miatt. Erre a projektre viszont tökéletesen megfelelt.</p>
                    <p>Mai napig mosollyal emlékezünk vissza arra a napra, amikor az első beaconek megérkeztek a postán. Olyan volt mint egy előrehozott Karácsony este!</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        A nagyvállalati folyamatok nagyon szigorúak
                    </h5>
                    <p>Korábban és azóta is dolgoztunk már nagyvállalatokkal, de a P&G-nél tapasztalt alapos kiválasztási folyamat azóta is lenyűgöz. Komoly háttér ellenőrzésen estünk át, illetve részletes adatbiztonsági házirendet, folytonossági tervet és incidens menedzsment folyamatokat kellett bemutassunk.</p>
                    <p>Legtöbb kis vállalatnak mint amilyen a miénk, nincsenek is ilyen irányelvei, ezért különösen boldogok voltunk, amikor a P&G mindent rendben talált.</p>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">3</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        A nagyvállalati döntéshozás gyakran lassú
                    </h5>
                    <p>Egy másik szempont amire fel kellett készüljünk, az a lassú döntéshozási folyamat volt. Ez nem ügyfélspecifikus, egyszerűen csak része a nagyvállalati világnak. Minden választást és megoldási javaslatot több szinten kellett jóváhagyni, úgy IT, mind üzleti oldalon. Ezt mind figyelembe kellett vegyük, amikor határidőket szabtunk meg.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <a class="project__gallery" data-toggle="modal" data-target="#gallery-modal">
            <img src="{{ asset('media/projects/pg-gallery.jpg') }}" alt="Galéria megnyitása" />

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
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/pg-gallery-1.jpg') }}" alt="Procter & Gamble - Cycle Inventory Counting" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Kimenő listák</h5>
                            <div class="project__gallery-modal__description">
                                <p>Ez az a felület, ahol az FAA-k tudják a feladatokat menedzselni. A szoftver kiolvassa az állótőke listát az SAP-ból, majd egyenlően elosztja a munkát az FAO-k között úgy, hogy egyetlen tárgy se legyen több mint egyszer ellenőrízve leltár ciklusonként.</p>
                                <p>Az FAA-k jóvá tudják hagyni ezeket a listákat vagy, amennyiben az FAO tútterhelt vagy szabadságon van, a következő hónapra átprogramálni. Az FAO-k ugyanitt tudnak további feladatok kérni, ha úgy érzik több munkát is tudnak vállalni.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/pg-gallery-2.png') }}" alt="Procter & Gamble - Cycle Inventory Counting" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Leltározási folyamat</h5>
                            <div class="project__gallery-modal__description">
                                <p>A leltározási folyamat úgy kezdődik, hogy az FAO beolvassa a tárgyon található RFID címkét vagy QR kódot. Amennyiben a címke megegyezik a keresett tárggyal, a szoftver kiolvassa a hozzá tartozó adatokat az adatbázisból, a lokáció pedig beacon és GPS alapon meghatározásra kerül.</p>
                                <p>Az FAO-nak innen már csak egy pár fotót kell készítenie a telefonjával amin az applikáció fut, illetve egy pár adatot jóvá kell hagyjon. Amennyiben valamelyik adatot nem talál rendben, erről egy bejelentést tud írni.</p>
                                <p>Mielőtt a jelenlegi applikációt bevezettük, az FAO a listát SAP-ből kellett letöltse Excel táblázatként, kinyomtassa, kézzel kitöltse majd a folyamat végén minden adatot begépeljen SAP-ba. Ez a folyamat fölöslegesen időigényes volt, ráadásul az emberi hibafaktor is maga volt.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/pg-gallery-3.jpg') }}" alt="Procter & Gamble - Cycle Inventory Counting" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Bejövő listák</h5>
                            <div class="project__gallery-modal__description">
                                <p>A bejövő listák felület mintegy irányítótoronyként szolgál az FAA számára. Itt tudják megtekinteni a már teljesített leltári listákat és ugyanitt látják a folyamat előrehaladását és a bontásokat bejelentések és FAO-k szerint.</p>
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
                    "name": "Procter & Gamble - Cycle Inventory Counting esettanulmány"
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
    "description": "A P&G megbízott minket, hogy fejlesszünk számukra egy leltározó applikációt az állótőke nyílvántartasának segítésére. With the help of the application, P&G reduced their inventory cycle from 3 years, to just 1 year!",
    "headline": "Procter & Gamble - Cycle Inventory Counting esettanulmány",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Inventory, SAP, Microsoft Azure, Vue, Laravel",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "Procter & Gamble - Cycle Inventory Counting esettanulmány",
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
                "name": "Procter & Gamble - Cycle Inventory Counting esettanulmány"
            }
        }
    ]
}
</script>
@endpush